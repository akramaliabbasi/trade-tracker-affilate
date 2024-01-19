<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CompanySeeder extends Seeder
{
    public function run()
    {
        // Company data
        $companies = [
            [
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHwSfePONiuE64QS_7Vp2aeQhqmUQ2xMIvN8ifDIMaZQ&s',
                'name' => 'IBM',
                'description' => 'International Business Machines Corporation',
                'address' => 'Armonk, New York, USA',
                'stock_symbol' => 'IBM',
            ],
            [
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Apple-logo.png',
                'name' => 'Apple Inc.',
                'description' => 'Designs, manufactures, and markets consumer electronics, computer software, and online services.',
                'address' => 'Cupertino, California, USA',
                'stock_symbol' => 'AAPL',
            ],
            [
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/1280px-Microsoft_logo_%282012%29.svg.png',
                'name' => 'Microsoft Corporation',
                'description' => 'Technology company that develops, licenses, and sells computer software, consumer electronics, and other personal computing and communications services.',
                'address' => 'Redmond, Washington, USA',
                'stock_symbol' => 'MSFT',
            ],
            [
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZLQmL6MrQdyrmcqs7hqL51DtWLIKPVr7Znr7ndd9Fiw&s',
                'name' => 'Google (Alphabet Inc.)',
                'description' => 'Multinational conglomerate that was created as part of the restructuring of Google on October 2, 2015.',
                'address' => 'Mountain View, California, USA',
                'stock_symbol' => 'GOOGL', // Class A shares
            ],
            [
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpDGWlaMosEyl7zu8Lb0h_NezHcAffLMvMVQQe611C3Q&s',
                'name' => 'Amazon.com Inc.',
                'description' => 'Multinational technology company that focuses on e-commerce, cloud computing, digital streaming, artificial intelligence, and more.',
                'address' => 'Seattle, Washington, USA',
                'stock_symbol' => 'AMZN',
            ],
            [
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png',
                'name' => 'Facebook (Meta Platforms, Inc.)',
                'description' => 'Social media conglomerate that develops technologies for the metaverse, augmented reality, virtual reality, and more.',
                'address' => 'Menlo Park, California, USA',
                'stock_symbol' => 'FB',
            ],
            [
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Tesla_logo.png',
                'name' => 'Tesla, Inc.',
                'description' => 'Electric vehicle and clean energy company.',
                'address' => 'Palo Alto, California, USA',
                'stock_symbol' => 'TSLA',
            ],
            [
                'logo' => 'https://www.freeiconspng.com/thumbs/intel-logo-png/intel-logo-png-2.png',
                'name' => 'Intel Corporation',
                'description' => 'American multinational corporation and technology company.',
                'address' => 'Santa Clara, California, USA',
                'stock_symbol' => 'INTC',
            ],
           
        ];

        // Insert data into the database
        foreach ($companies as $companyData) {
            Company::create($companyData);
        }
    }
}
