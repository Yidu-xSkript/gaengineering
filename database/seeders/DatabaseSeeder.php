<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Header;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'role' => 'admin',
            'name' => 'Ga Admin',
            'password' => bcrypt('password'),
            'email' => 'gaadmin@gaengineering.et'
        ]);
        Setting::factory()->create([
            'about' => 'Gezahegn Ayalew General Trading is a private company established in 2010 We specialize in Providing Better Services for Supply And Installation Works of Electro-Mechanical and related Equipment In Ethiopia.',
            'happy_client' => 65,
            'projects' => 85,
            'years_of_experience' => 10,
            'awards' => 15,
            'phone_number' => '+251920743179',
            'location' => 'Branch 1: Lucky Building 4th Floor,
            Bole Medhanialem, Infront of Monarch Hotel <br>
            Branch 2: NK Business Center 5th floor, <br>
            Behind Dembel City Center',
            'map_location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.752579005441!2d38.782843314786405!3d8.994899793544542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84fdf48671cd%3A0x9b6f68db0765ba01!2sLucky%20Building%2C%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1620739051382!5m2!1sen!2set',
            'email' => 'info@gageneraltrading.com',
        ]);
        About::factory()->create([
            'video_url' => 'https://www.youtube.com/watch?v=fKuQNpMWOFQ',
            'about_content' => '<h3>WELCOME TO G.A. GENERAL TRADING</h3>
            <p class="">
                Gezahegn Ayalew General Trading is a private company established in 2010 We specialize in
                Providing Better Services for Supply And Installation Works of Electro-Mechanical and related
                Equipment In Ethiopia, Our Company is well experienced in this sector and has multiple
                professionals from different fields. Our company’s constant endeavor has been to extend our
                expertise in designing and implementation of various plants and facilities both for governmental
                and Non-governmental Organizations.
            </p>
            <ul>
                <li><i class="bx bx-check-double"></i> Electro-mechanical Parts</li>
                <li><i class="bx bx-check-double"></i> Industrial automation system</li>
                <li><i class="bx bx-check-double"></i> Security system (Automated Gate barrier with CCTV Camera)
                </li>
                <li><i class="bx bx-check-double"></i> Street light and Flood Light Assembly and installations
                </li>
                <li><i class="bx bx-check-double"></i> Heavy-duty Generators, Transformers and Control system
                </li>
                <li><i class="bx bx-check-double"></i> IP Video Surveillance System(CCTV) </li>
                <li><i class="bx bx-check-double"></i> Network Design, installation and configuration </li>
                <li><i class="bx bx-check-double"></i> Cloud Infrastructure </li>
                <li><i class="bx bx-check-double"></i> Modular and Container Datacenter Design, installation and
                    configuration </li>
            </ul>
            <p>
                We are one of the few companies that can offer the full spectrum of solutions related to
                Electromechanical products, Systems Supply and maintenance including the implementation of the
                Reliability-Centered Maintenance Strategy with Integrated Asset Condition Monitoring systems.
            </p>'
        ]);
        Header::factory()->create([
            'title' => 'Welcome to GA Engineering',
            'slug' => 'We are a team of engineering professionals.'
        ]);
    }
}
