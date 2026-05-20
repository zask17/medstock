<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showAuthPage()
    {
        return view('auth.page');
    }

    public function login(Request $request)
    {
        // 1. Validasi input form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'id_pegawai' => 'required',
        ]);

        // 2. Data Akun Ter-registrasi (Hardcoded Multi-Role)
        $users = [
            [
                'id_pegawai' => 'MDSTK01',
                'email'      => 'admin@medstock.com',
                'password'   => 'password123',
                'nama'       => 'Zaskia Rania',
                'role'       => 'Admin System'
            ],
            [
                'id_pegawai' => 'MDSTK02',
                'email'      => 'gudang@medstock.com',
                'password'   => 'gudang123',
                'nama'       => 'Budi Setiawan',
                'role'       => 'Pegawai Gudang'
            ],
            [
                'id_pegawai' => 'MDSTK03',
                'email'      => 'apoteker@medstock.com',
                'password'   => 'apoteker123',
                'nama'       => 'Dr. Fitriani',
                'role'       => 'Apoteker'
            ],
            [
                'id_pegawai' => 'MDSTK04',
                'email'      => 'asisten@medstock.com',
                'password'   => 'asisten123',
                'nama'       => 'Andi Wijaya',
                'role'       => 'Asisten Apoteker'
            ],
        ];

        // 3. Proses Pencarian Kredensial yang Cocok
        $loggedInUser = null;

        foreach ($users as $user) {
            if (
                $user['email'] === $request->email &&
                $user['password'] === $request->password &&
                $user['id_pegawai'] === $request->id_pegawai
            ) {
                $loggedInUser = $user;
                break;
            }
        }

        // 4. Pengondisian Hasil Login
        if ($loggedInUser) {
            session([
                'user_id_pegawai' => $loggedInUser['id_pegawai'],
                'user_nama' => $loggedInUser['nama'],
                'user_role' => $loggedInUser['role']
            ]);

            if ($loggedInUser['role'] === 'Admin System') {
                return redirect()->route('admin.dashboard');
            } elseif ($loggedInUser['role'] === 'Pegawai Gudang') {
                return redirect()->route('gudang.dashboard');
            } elseif ($loggedInUser['role'] === 'Apoteker') {
                return redirect()->route('apoteker.dashboard');
            } elseif ($loggedInUser['role'] === 'Asisten Apoteker') {
                return redirect()->route('apoteker.dashboard');
            }

            // Untuk belum ada  role arahkan ke dashboard umum atau back
            return redirect()->back()->with('success', "Selamat datang {$loggedInUser['nama']}");
        }
        // if ($loggedInUser) {
        //     // Menyimpan data user sementara di Session agar nama & role bisa dipanggil di halaman berikutnya jika perlu
        //     session([
        //         'user_nama' => $loggedInUser['nama'],
        //         'user_role' => $loggedInUser['role']
        //     ]);

        //     // Berhasil login dengan pesan dinamis sesuai Nama dan Role-nya
        //     return redirect()->back()->with(
        //         'success',
        //         "Login Berhasil! Selamat datang {$loggedInUser['nama']} ({$loggedInUser['role']}) di MedStock."
        //     );
        // }

        // Jika gagal
        return redirect()->back()->withErrors([
            'loginError' => 'Email, Password, atau ID Pegawai salah!'
        ])->withInput($request->except('password'));
    }

    public function showForgotPasswordPage(Request $request)
    {
        // Default ke step 1 (Pilih Email / Phone) jika parameter step kosong
        $step = $request->query('step', 1);
        $method = $request->query('method', 'email'); // email atau phone
        $target = $request->query('target', ''); // menyimpan value email/no hp

        return view('auth.forgot-password', compact('step', 'method', 'target'));
    }

    public function processForgotPassword(Request $request)
    {
        $currentStep = $request->input('step');

        if ($currentStep == 1) {
            $method = $request->input('method', 'email');
            $target = $request->input('target');

            if (empty($target)) {
                return redirect()->back()->withErrors(['error' => 'Input tidak boleh kosong!']);
            }

            // Lanjut ke Step 2 (Verifikasi Kode) & kirim data via query string
            return redirect()->route('password.request', [
                'step' => 2,
                'method' => $method,
                'target' => $target
            ]);
        }

        if ($currentStep == 2) {
            // Gabungkan array OTP input [digit1, digit2, digit3, digit4]
            $otp = implode('', $request->input('otp', []));

            // Hardcoded kode OTP: 1234
            if ($otp !== '1234') {
                return redirect()->back()->withErrors(['error' => 'Kode verifikasi salah! Gunakan kode 1234.']);
            }

            // Lanjut ke Step 3 (Reset Password)
            return redirect()->route('password.request', [
                'step' => 3,
                'method' => $request->input('method'),
                'target' => $request->input('target')
            ]);
        }

        if ($currentStep == 3) {
            $password = $request->input('password');
            $confirmPassword = $request->input('password_confirmation');

            if ($password !== $confirmPassword) {
                return redirect()->back()->withErrors(['error' => 'Konfirmasi password tidak cocok!']);
            }

            // Lanjut ke Step 4 (Tampilan Sukses / Modal)
            return redirect()->route('password.request', ['step' => 4]);
        }

        return redirect()->route('login');
    }
}
