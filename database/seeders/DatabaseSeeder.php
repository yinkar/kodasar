<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::create([
            'name' => 'Kodasar',
            'username' => 'kodasar',
            'email' => 'kodasar@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123'),
            'gender' => 'male',
            'remember_token' => Str::random(10),
        ]);
        User::factory(9)->create();

        // Directories
        foreach (
            [   'C', 'PHP', 'C++', 'Python',
                'HTML','Bash', 'JavaScript', 'Go',
            ] as $name
        ) {
            \App\Models\Dictionary::create([
                'name' => $name,
                'slug' => Str::of($name)->slug('-'),
                'description' => '',
                'validated' => true,
                'user_id' => 1
            ]);
        }

        // Entries
        \App\Models\Entry::insert([
            [
                'command' => 'printf()',
                'info' => 'C dilinde ekranda içerik göstermeyi sağlar.',
                'dictionary_id' => 1,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => 'stdio.h',
                'example' => "#include <stdio.h>\r\n#include <conio.h>\r\n\r\nmain() {\r\n\tprintf(\"Kodasar\");\r\n\tgetch();\r\n}",
                'extra' => '',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'main()',
                'info' => 'C dilinde programın çalışması için gerekli fonksiyondur.',
                'dictionary_id' => 1,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => '',
                'example' => "main() {\r\n\t//Program kodları\r\n}",
                'extra' => 'Her C uygulamasında olması gereken bu fonksiyonun tanım kısmına çalışacak kodlar yazılır.',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'sizeof()',
                'info' => 'Veri ve veri türlerinin değerini ölçmeye yarayan operatördür.',
                'dictionary_id' => 1,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => '',
                'example' => "#include <stdio.h>\r\n\r\nint main() {\r\n\r\n\tprintf(\"Int için ayrılan alan: %d\", sizeof(int));{\r\n\r\n\tchar q[10] = \"Kodasar\";{\r\n\r\n\tprintf(\"String'in büyüklüğü: %d\", sizeof(q));\r\n\r\n{\r\n\r\n\treturn 0;\r\n}",
                'extra' => 'Bu komut bir fonksiyon değil, C dilinin sahip olduğu bir operatördür. Dolayısıyla kullanmak için hiçbir kütüphaneye ihtiyaç duyulmaz.',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'rand()',
                'info' => 'Sayı olarak aldığı iki parametre arasında rastgele sayı üretmeyi sağlar.',
                'dictionary_id' => 2,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => '',
                'example' => "<?php\r\n\trand(10, 100);\r\n?>",
                'extra' => 'Bu komut bir fonksiyon değil, C dilinin sahip olduğu bir operatördür. Dolayısıyla kullanmak için hiçbir kütüphaneye ihtiyaç duyulmaz.',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'echo',
                'info' => "PHP'de ekranda içerik göstermeyi sağlar.",
                'dictionary_id' => 2,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => '',
                'example' => "<?php\r\n\techo \"Kodasar\";\r\n?>",
                'extra' => '"echo" bir fonksiyon sayılmaz, bu yüzden parantez kullanımına gerek yoktur. Fakat bir fonksiyon olarak echo("Kodasar") formunda yazılan bir kod da çalışacaktır.',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'phpinfo()',
                'info' => "Cihazda çalışan PHP sürümü ile ilgili bilgi veren bir sayfa gösterir.",
                'dictionary_id' => 2,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => '',
                'example' => "<?php\r\n\tphpinfo();\r\n?>",
                'extra' => '',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'command' => 'cout',
                'info' => "C++ dilinde ekranda içerik göstermeyi sağlar.",
                'dictionary_id' => 3,
                'user_id' => 1,
                'ip' => '127.0.0.1',
                'library' => 'iostream',
                'example' => "#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n\tcout << \"Kodasar\";\r\n\r\n\tint x;\r\n\tcin >> x;\r\n}",
                'extra' => '',
                'validated' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
