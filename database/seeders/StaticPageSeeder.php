<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add static pages
        $staticPages = [
            [
                'section' => 'header',
                'data' => [
                    "welcome_text" => "Welcome to Royal Weddings International",
                    "button_text" => "Reach Us",
                    "button_link" => "/kontak",
                    "company_logo" => "1685280156-logo_02.png",
                ]
            ],
            [
                'section' => 'homestatic',
                'data' => [
                    "about_title" => "Your Wedding Journey Starts Here",
                    "about_subtitle" => "Royal Weddings International",
                    "about_text_1" => "Welcome to Royal Weddings International. We are the largest destination wedding organizer in Singapore.",
                    "about_text_2" => "Royal Weddings International was formed to strive for excellence in every aspect of our work, aiming to exceed expectations and deliver exceptional service and experiences to our clients. We at Royal Weddings International uphold the highest standards of integrity, honesty, and transparency in our interactions with clients, partners, and team members.",
                    "about_image" => "about_image.jpg",
                    "specialty_title" => 'Our Specialty',
                    "specialty_text" => 'Experience one stop wedding solution for destination wedding. Enjoy the ultimate priviledge of comfort and peace while we do the magic.',
                ]
            ],
            [
                'section' => 'footer',
                'data' => [
                    "footer_text" => "We are your partner in organizing magical experience in destination wedding.",
                    "footer_logo" => "1685284018-w_logo.png",
                    "copyright" => "2023 Royal Weddings International. All Rights Reserved.",
                ]
            ],
            [
                'section' => 'socialmedia',
                'data' => [
                    "facebook" => "#",
                    "instagram" => "#",
                    "linkedin" => "#",
                    "youtube" => "#",
                    "tiktok" => null
                ]
            ],
            [
                'section' => 'aboutstatic',
                'data' => [
                    "page_title" => "About Us",
                    "about_company_title" => "About Us",
                    "about_company_section_subtitle" => "Royal Weddings International",
                    "about_company_section_text" => "Welcome to Royal Weddings International. We are the largest destination wedding organizer in Singapore.",
                    "about_company_section_text_2" => "Royal Weddings International was formed to strive for excellence in every aspect of our work, aiming to exceed expectations and deliver exceptional service and experiences to our clients. We at Royal Weddings International uphold the highest standards of integrity, honesty, and transparency in our interactions with clients, partners, and team members. We believe in building trusting relationships based on mutual respect and ethical conduct. We value the uniqueness of each couple and their vision for their special day. We are dedicated to creating personalized, tailor-made experiences that reflect their individual style, preferences, and cultural backgrounds.We embrace creativity and innovation, constantly seeking fresh ideas and unique solutions to make each wedding extraordinary and memorable.",
                    "about_company_image" => "about_image.jpg",
                    "extra_title_1" => "Our Mission",
                    "extra_text_1" => "Our mission is to create unforgettable moments of love and celebration, crafting exceptional weddings that reflect the unique personalities and dreams of each couple.",
                    "extra_image_1" => "extra01.jpg",
                    "extra_title_2" => "OUR VALUES",
                    "extra_text_2" => "We are dedicated to providing the highest level of service, professionalism, and attention to detail, ensuring that every aspect of the wedding journey is seamlessly planned and executed. By combining our expertise, creativity, and passion, we aim to exceed expectations and deliver extraordinary experiences that leave lasting memories for our cherished clients and their loved ones.",
                    "extra_image_2" => "extra02.jpg",
                    "extra_title_3" => "OUR PROMISE",
                    "extra_text_3" => "With a commitment to inclusivity, diversity, and personalized care, we strive to make every couple feel valued, supported, and celebrated as they embark on their lifelong journey together. Our ultimate goal is to transform dreams into reality, weaving together love, joy, and enchantment, one breathtaking wedding at a time.",
                    "extra_image_3" => "extra03.jpg",
                    "video_link" => "#",
                    "video_image" => "video01.jpg",
                    "breadcrumb_cover_image" => "1685284411-breadcrumb_bg.jpg",
                ]
            ],
            [
                'section' => 'contactwidget',
                'data' => [
                    "section_title" => "Engage With Us Today!",
                    "section_text" => "Talk to us about your wedding needs and we'll be in touch with you shortly.",
                    "button_text" => "Contact Us",
                    "button_link" => "/contact",
                ]
            ],
            [
                'section' => 'contactstatic',
                'data' => [
                    "contact_title" => "Contact Us",
                    "right_section_title" => "Reach Us",
                    "right_section_text" => "Stay in Touch With Royal Weddings International",
                    "right_button_text" => "Send Message",
                    "address_title" => "Singapore Headquarter",
                    "google_map_link" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.794271228245!2d103.84155707582455!3d1.2981675617380102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da199804a12a3d%3A0xa3eddf5a5ae7c117!2s190%20Clemenceau%20Ave%2C%20Singapore%20239924!5e0!3m2!1sen!2sid!4v1688587937635!5m2!1sen!2sid",
                    "breadcrumb_cover_image" => "contact-breadcrumb_bg.jpg"
                ]
            ],
            [
                'section' => 'contactinfo',
                'data' => [
                    "company_phone" => "(+65) 9338 4263",
                    "company_email" => "hello@royalweddings.com.sg",
                    "company_address" => "190 CLEMENCEAU AVENUE #06-08<br>SINGAPORE 239924"
                ]
            ]

        ];

        foreach ($staticPages as $staticPage) {
            $section = $staticPage['section'];
            $data = json_encode($staticPage['data']);

            StaticPage::create([
                'section' => $section,
                'data' => $data
            ]);
        }
    }
}
