<?php

namespace App\Models;

use App\Models\Concerns\ClearsPortfolioCache;
use App\Support\Media;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use ClearsPortfolioCache;
    protected $fillable = [
        'page_title',
        'brand_name',
        'owner_name',
        'greeting',
        'roles',
        'bio',
        'photo',
        'cv_path',
        'caption_primary',
        'caption_secondary',
        'github',
        'instagram',
        'linkedin',
        'whatsapp',
        'email',
        'footer_note',
    ];

    public static function defaults(): array
    {
        return [
            'page_title' => 'Muhammad Habib Masyhur | Portfolio',
            'brand_name' => 'Babbibub',
            'owner_name' => 'Muhammad Habib Masyhur',
            'greeting' => 'Hi! This is my',
            'roles' => 'FULL STACK DEVELOPER • IOT ENGINEER • AI ENGINEER',
            'bio' => "An Information Technology student at Brawijaya University with a strong interest in <strong>Artificial Intelligence, the Internet of Things, and Full-Stack Web Development.</strong>\nPassionate about developing modern web applications using Laravel and building innovative, efficient, and user-centered digital solutions.",
            'photo' => 'images/propok-cutout.png',
            'cv_path' => 'cv/CV - Muhammad Habib Masyhur.pdf',
            'caption_primary' => 'Mahasiswa Teknologi Informasi',
            'caption_secondary' => 'Universitas Brawijaya',
            'github' => 'https://github.com/kuncooroo',
            'instagram' => 'https://instagram.com/msyhrrr_',
            'linkedin' => 'https://linkedin.com/in/muhammad-habib-masyhur',
            'whatsapp' => 'https://wa.me/6287785711752?text=Halo%20Habib,%20saya%20tertarik%20dengan%20portfolio%20Anda.',
            'email' => 'muhammadhabibmasyhur14@gmail.com',
            'footer_note' => 'Built with Laravel & Tailwind CSS',
        ];
    }

    public static function current(): self
    {
        return static::query()->first() ?? static::query()->create(static::defaults());
    }

    public function photoUrl(): ?string
    {
        return Media::display($this->photo);
    }

    public function cvUrl(): ?string
    {
        return Media::url($this->cv_path);
    }

    public function bioHtml(): string
    {
        $clean = strip_tags((string) $this->bio, '<strong><em><br><b><i>');

        return nl2br($clean, false);
    }

    public function hasSocialLinks(): bool
    {
        return (bool) ($this->github || $this->instagram || $this->linkedin || $this->whatsapp || $this->email);
    }
}
