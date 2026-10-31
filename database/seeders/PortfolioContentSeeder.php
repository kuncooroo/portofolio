<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class PortfolioContentSeeder extends Seeder
{
    /**
     * Seed the portfolio content that used to live in the Blade templates.
     */
    public function run(): void
    {
        Setting::query()->firstOrCreate(
            ['owner_name' => Setting::defaults()['owner_name']],
            Setting::defaults(),
        );

        User::query()->firstOrCreate(
            ['email' => 'muhammadhabibmasyhur14@gmail.com'],
            [
                'name' => 'Muhammad Habib Masyhur',
                'password' => 'Babbibub#2026',
                'email_verified_at' => now(),
            ],
        );

        if (Skill::query()->doesntExist()) {
            $skills = [
                ['name' => 'Laravel', 'icon' => 'devicon-laravel-plain', 'category' => 'web'],
                ['name' => 'PHP', 'icon' => 'devicon-php-plain', 'category' => 'web'],
                ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain', 'category' => 'web'],
                ['name' => 'Supabase', 'icon' => 'devicon-supabase-plain', 'category' => 'web'],
                ['name' => 'HTML5', 'icon' => 'devicon-html5-plain', 'category' => 'web'],
                ['name' => 'CSS3', 'icon' => 'devicon-css3-plain', 'category' => 'web'],
                ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain', 'category' => 'web'],
                ['name' => 'Tailwind CSS', 'icon' => 'devicon-tailwindcss-original', 'category' => 'web'],
                ['name' => 'Bootstrap', 'icon' => 'devicon-bootstrap-plain', 'category' => 'web'],
                ['name' => 'React', 'icon' => 'devicon-react-original', 'category' => 'web'],
                ['name' => 'Python', 'icon' => 'devicon-python-plain', 'category' => 'ai'],
                ['name' => 'Flask', 'icon' => 'devicon-flask-original', 'category' => 'ai'],
                ['name' => 'TensorFlow', 'icon' => 'devicon-tensorflow-original', 'category' => 'ai'],
                ['name' => 'OpenCV', 'icon' => 'devicon-opencv-plain', 'category' => 'ai'],
                ['name' => 'Arduino', 'icon' => 'devicon-arduino-plain', 'category' => 'iot'],
                ['name' => 'C++', 'icon' => 'devicon-cplusplus-plain', 'category' => 'iot'],
                ['name' => 'Flutter', 'icon' => 'devicon-flutter-plain', 'category' => 'mobile'],
                ['name' => 'Dart', 'icon' => 'devicon-dart-plain', 'category' => 'mobile'],
                ['name' => 'Android', 'icon' => 'devicon-android-plain', 'category' => 'mobile'],
                ['name' => 'Git', 'icon' => 'devicon-git-plain', 'category' => 'tools'],
                ['name' => 'GitHub', 'icon' => 'devicon-github-original', 'category' => 'tools'],
                ['name' => 'VS Code', 'icon' => 'devicon-vscode-plain', 'category' => 'tools'],
                ['name' => 'Figma', 'icon' => 'devicon-figma-plain', 'category' => 'tools'],
                ['name' => 'Canva', 'icon' => 'devicon-canva-original', 'category' => 'tools'],
                ['name' => 'Docker', 'icon' => 'devicon-docker-plain', 'category' => 'tools'],
                ['name' => 'Arduino IDE', 'icon' => 'devicon-arduino-plain', 'category' => 'tools'],
                ['name' => 'Postman', 'icon' => 'devicon-postman-plain', 'category' => 'tools'],
                ['name' => 'EX: 370', 'icon' => 'gaming.png', 'category' => 'gaming'],
            ];

            foreach ($skills as $index => $skill) {
                Skill::query()->create($skill + [
                    'sort_order' => $index + 1,
                    'is_visible' => true,
                ]);
            }
        }

        if (Experience::query()->doesntExist()) {
            $experiences = [
                ['year' => '2025', 'title' => 'PROVOKS UB', 'subtitle' => 'Staff Sekertaris', 'description' => 'Bergabung sebagai Staff Sekretaris di PROVOKS UB, mengurus administrasi dan kesekretariatan organisasi.', 'image' => 'experience/Provoks.JPG'],
                ['year' => '2024', 'title' => 'KOMAKU', 'subtitle' => 'Staff Infokom', 'description' => 'Bergabung sebagai Staff Infokom di KOMAKU, mengurus informasi dan komunikasi organisasi.', 'image' => 'experience/KOMAKU.jpeg'],
                ['year' => '2024', 'title' => 'KMNU', 'subtitle' => 'Staff Media & Relation', 'description' => 'Bergabung sebagai Staff Media & Relation di KMNU Universitas Brawijaya, mengurus media dan hubungan organisasi.', 'image' => 'experience/KMNU.jpeg'],
                ['year' => '2025', 'title' => 'Olivia X UB', 'subtitle' => 'Participant', 'description' => 'Berpartisipasi dalam Olivia X di Universitas Brawijaya.', 'image' => 'experience/Olivia X UB.jpg'],
                ['year' => '2026', 'title' => 'Olivia XI Unesa', 'subtitle' => 'Participant', 'description' => 'Berpartisipasi dalam Olivia XI di Universitas Negeri Surabaya dan menampilkan proyek kandang pintar.', 'image' => 'experience/Olivia XI Unesa.jpeg'],
                ['year' => '2026', 'title' => 'PKM', 'subtitle' => 'Participant', 'description' => 'Mengikuti Program Kreativitas Mahasiswa sebagai peserta.', 'image' => 'experience/PKM.jpeg'],
            ];

            foreach ($experiences as $index => $experience) {
                Experience::query()->create($experience + [
                    'sort_order' => $index + 1,
                    'is_visible' => true,
                ]);
            }
        }

        if (Project::query()->doesntExist()) {
            $projects = [
                ['year' => '2025', 'title' => 'Wellnessplate', 'subtitle' => 'PHP . MySQL', 'description' => 'Wellnessplate adalah platform untuk menemukan hidangan sehat sesuai kondisi pengguna, lengkap dengan resep dan artikel yang mudah diikuti.', 'image' => 'projects/wellnessplate.png'],
                ['year' => '2025', 'title' => 'Warung Soto Vokasi', 'subtitle' => 'Laravel . MySQL', 'description' => 'Warung Soto Vokasi adalah situs untuk menampilkan menu, testimoni, dan informasi Warung Soto Pak Sulung cabang Vokasi.', 'image' => 'projects/Warung Soto Vokasi.png'],
                ['year' => '2025', 'title' => 'Buah AI', 'subtitle' => 'Laravel . Flask . MySQL', 'description' => 'Buah AI mendeteksi kesegaran buah dari foto yang diunggah, lalu memberi tahu apakah buah itu masih segar atau tidak dalam hitungan detik.', 'image' => 'projects/Buah AI.png'],
                ['year' => '2025', 'title' => 'KaloriQ', 'subtitle' => 'Flutter . Supabase', 'description' => 'KaloriQ adalah aplikasi untuk menghitung kalori harian, membantu pengguna yang sedang diet atau bulking memantau asupan makanannya.', 'image' => 'projects/kaloriQ.png'],
                ['year' => '2025', 'title' => 'SmartCane', 'subtitle' => 'Laravel . Flask . C++ . YOLO . MySQL', 'description' => 'SmartCane adalah alat untuk membantu tunanetra berjalan lebih aman, dengan deteksi halangan di sekitar pengguna.', 'image' => 'projects/Smart Cane.png'],
                ['year' => '2026', 'title' => 'SmartCoop', 'subtitle' => 'Laravel . Flask . C++ . YOLO . MySQL', 'description' => 'SmartCoop adalah sistem kandang pintar untuk mengelola pakan, memantau suhu, dan mengontrol gerbang secara real-time.', 'image' => 'projects/SmartCoop.png'],
                ['year' => '2026', 'title' => 'Cek Halal', 'subtitle' => 'Laravel . MySQL', 'description' => 'Cek Halal adalah platform untuk memeriksa sertifikasi halal produk, supaya konsumen bisa memastikan status halal sebelum membeli.', 'image' => 'projects/Cek Halal.png'],
            ];

            foreach ($projects as $index => $project) {
                Project::query()->create($project + [
                    'sort_order' => $index + 1,
                    'is_visible' => true,
                ]);
            }
        }

        if (Certificate::query()->doesntExist()) {
            $certificates = [
                [
                    'image' => 'certificates/Sololearn.jpg',
                    'issuer' => 'Sololearn',
                    'title' => 'Introduction to Java',
                    'description' => 'Successfully completed Java.',
                    'year' => '2024',
                ],
                [
                    'image' => 'certificates/BitDegree.jpg',
                    'issuer' => 'BitDegree',
                    'title' => 'Interactive Coding Course for Beginners: Learn CSS & HTML',
                    'description' => 'Successfully completed CSS & HTML.',
                    'year' => '2023',
                ],
            ];

            foreach ($certificates as $index => $certificate) {
                Certificate::query()->create($certificate + [
                    'sort_order' => $index + 1,
                    'is_visible' => true,
                ]);
            }
        }
    }
}
