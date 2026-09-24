<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Software Development',
                'banner' => '1786611235_banner.jpg',
                'image1' => '1786611235_image1.jpg',
                'image2' => '1786611235_image2.jpg',
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Custom enterprise applications, ERPs, SaaS platforms, and distributed microservice architectures built for high scalability and fault isolation.',
                'details2' => "Custom Enterprise ERP & CRM\r\nDistributed Microservices Architecture\r\nRESTful & GraphQL API Integration\r\nHigh-Performance Cloud Backend",
                'details3' => '<p>Our Software Development service delivers enterprise-grade software applications tailored specifically for complex business requirements. We utilize modern architectural patterns such as microservices, domain-driven design, and cloud-native frameworks to build scalable, fault-tolerant platforms. Whether you need a custom enterprise ERP, a multi-tenant SaaS application, or complex backend API integrations, our engineering team ensures high security, 99.9% uptime, and clean maintainable code.</p>',
            ],
            [
                'title' => 'Web Application Development',
                'banner' => null,
                'image1' => '2.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Modern, fast, and secure web applications built using Laravel, React, Vue.js, and Next.js, optimized for maximum performance and user conversion.',
                'details2' => "Full-Stack Web Applications (Laravel & Node)\nProgressive Web Apps (PWA)\nSingle Page Applications (Vue & React)\nCore Web Vitals & SEO Optimization",
                'details3' => '<p>We specialize in engineering modern, full-stack web applications that combine rich interactive user interfaces with robust server-side architecture. Leveraging industry-leading frameworks like Laravel, Vue.js, React, and Next.js, we build web products that load in milliseconds, scale effortlessly under high user concurrency, and rank exceptionally well on search engines. From web portals to complex admin dashboards, we engineer applications built to last.</p>',
            ],
            [
                'title' => 'Mobile App Development',
                'banner' => null,
                'image1' => '3.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Native Android & iOS mobile applications and cross-platform apps (Flutter & React Native) delivering smooth, responsive user experiences.',
                'details2' => "Native iOS & Android App Development\nCross-Platform Flutter & React Native Apps\nReal-Time Push Notifications & Offline Sync\nApp Store & Google Play Store Publishing",
                'details3' => '<p>Our Mobile Development team crafts high-performance iOS and Android applications designed to captivate users. We utilize both native technologies and cross-platform frameworks like Flutter and React Native to build feature-rich mobile apps. Every app includes offline data caching, biometrics authentication, payment gateway integration, real-time push notifications, and rigorous automated testing before store submission.</p>',
            ],
            [
                'title' => 'Cloud Engineering & DevOps',
                'banner' => null,
                'image1' => '4.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Cloud server setup, automated CI/CD deployment pipelines, AWS/GCP infrastructure, Docker containerization, and 24/7 server monitoring.',
                'details2' => "AWS, GCP & DigitalOcean Infrastructure\nCI/CD Automated Deployment Pipelines\nDocker Containerization & Kubernetes\n24/7 Server Performance & Uptime Monitoring",
                'details3' => '<p>Modern software requires reliable, automated cloud infrastructure. Our Cloud & DevOps engineers design and manage resilient cloud hosting environments on Amazon Web Services (AWS), Google Cloud Platform (GCP), and DigitalOcean. We implement automated CI/CD deployment workflows, containerized application environments with Docker and Kubernetes, and round-the-clock monitoring to ensure zero-downtime releases and instant auto-scaling under peak traffic.</p>',
            ],
            [
                'title' => 'Product UI/UX & Design Systems',
                'banner' => null,
                'image1' => '5.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'User-centric interface design, wireframing, interactive prototyping, and design system creation crafted to wow users and drive conversions.',
                'details2' => "Wireframing & Interactive Prototyping\nComponent-Based Design Systems (Figma)\nUser Journey & Conversion Rate Optimization\nMobile & Desktop Interface Audits",
                'details3' => '<p>Great software begins with intuitive design. Our Product UI/UX designers create aesthetically captivating and highly functional user interfaces. We conduct deep user research, construct interactive Figma prototypes, and establish scalable design systems with standard typography, color palettes, and component libraries. This ensures your software product delivers a frictionless, memorable user experience across all devices.</p>',
            ],
            [
                'title' => 'Data Architecture & Cybersecurity',
                'banner' => null,
                'image1' => '6.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Relational database design (MySQL/PostgreSQL), NoSQL database optimization, vulnerability audits, and automated backup solutions.',
                'details2' => "Relational & NoSQL Database Optimization\nSecurity Audits & Penetration Testing\nAutomated Encrypted Backups & Disaster Recovery\nData Encryption at Rest & In-Transit",
                'details3' => '<p>Data integrity and application security are foundational to modern software platforms. We architect high-performance database schemas, optimize complex SQL queries, and implement automated multi-region backup systems. Additionally, our cybersecurity audits test your application against OWASP top 10 vulnerabilities, implementing strict data encryption, OAuth2/JWT authentication, and SSL/TLS security protocols.</p>',
            ],
            [
                'title' => 'E-Commerce',
                'banner' => 'service_ecommerce_banner.jpg',
                'image1' => '1.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Custom high-converting e-commerce stores, multi-vendor marketplaces, secure payment gateways, and inventory automation built for growth.',
                'details2' => "Custom E-Commerce Web & Mobile Apps\nMulti-Vendor Marketplace Architecture\nSecure Payment Gateway & Wallet Integrations\nInventory, Order & Logistics Management Automation\nOmnichannel POS & CRM Synchronization\nSEO, High Conversion Rate & Performance Optimization",
                'details3' => '<p>In today\'s competitive digital economy, a high-performing e-commerce platform is critical to business growth. We build scalable, fast, and secure online shopping experiences designed to maximize conversions, streamline checkout flows, and scale effortlessly under high-traffic demands.</p><p>From single-brand direct-to-consumer (D2C) storefronts to complex multi-vendor marketplaces, our team delivers custom e-commerce architectures leveraging modern frameworks such as Laravel, Next.js, and headless commerce APIs. We integrate robust payment gateways (Stripe, PayPal, SSLCommerz, bKash, Nagad), automated tax calculations, inventory synchronization, and real-time shipping tracking.</p><p>Our e-commerce platforms feature advanced admin dashboards, multi-currency support, customer loyalty systems, abandoned cart recovery, and deep analytics to empower your business with actionable sales insights.</p>',
            ],
            [
                'title' => 'Graphics Design',
                'banner' => 'service_graphics_banner.jpg',
                'image1' => '2.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Creative brand identity, marketing visuals, UI assets, and corporate graphic design crafted to elevate brand presence and captivate audiences.',
                'details2' => "Corporate Brand Identity & Logo Design\nMarketing Collateral & Social Media Creatives\nUI/UX Graphic Assets & Vector Illustrations\nPackaging, Print Media & Brochure Design\nMotion Graphics & Promotional Visuals\nBrand Guidelines & Typography Systems",
                'details3' => '<p>Visual identity defines how customers perceive your brand. Our Graphics Design team combines creativity, strategic thinking, and modern design principles to create compelling visual assets that leave a lasting impression.</p><p>We deliver comprehensive graphic design services including corporate branding, distinctive logo marks, complete brand style guides, marketing collateral, social media design kits, packaging, and business presentations. Every design asset is meticulously crafted to resonate with your target audience and maintain visual consistency across all digital and print mediums.</p><p>Whether you are launching a new startup brand or revamping an established corporate identity, our designers produce high-resolution, print-ready, and web-optimized visual assets tailored to elevate your business above the competition.</p>',
            ],
            [
                'title' => 'Digital Marketing',
                'banner' => 'service_marketing_banner.jpg',
                'image1' => '3.png',
                'image2' => null,
                'image3' => null,
                'is_active' => 1,
                'details1' => 'Data-driven digital marketing, search engine optimization (SEO), targeted social campaigns, and performance advertising to scale leads and revenue.',
                'details2' => "Search Engine Optimization (SEO & Technical Audits)\nPay-Per-Click (PPC) & Google Ads Management\nSocial Media Marketing (SMM) & Campaign Strategy\nContent Marketing & Conversion Copywriting\nEmail Marketing Automation & Lead Funnels\nAnalytics, Conversion Tracking & ROI Reporting",
                'details3' => '<p>Driving sustainable business growth requires a data-backed digital marketing strategy. Our digital marketing specialists design and execute full-funnel marketing campaigns tailored to attract qualified prospects, nurture leads, and generate measurable revenue.</p><p>Our core marketing solutions encompass comprehensive Search Engine Optimization (technical SEO, on-page optimization, and high-authority link building), targeted Pay-Per-Click (PPC) advertising across Google and social channels, content marketing, and automated email workflows. We continuously analyze user behaviors, run A/B conversion tests, and optimize customer acquisition costs (CAC) to ensure maximum return on investment (ROI).</p><p>With transparent real-time performance reporting and dedicated campaign management, we help your business build brand authority, outrank competitors, and scale online customer acquisition predictable and effectively.</p>',
            ],
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(
                ['title' => $serviceData['title']],
                $serviceData
            );
        }
    }
}
