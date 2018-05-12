<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('students')->delete();
        DB::table('teachers')->delete();
        DB::table('courses')->delete();
        DB::table('lessons')->delete();
        DB::table('enrollments')->delete();

        DB::table('roles')->insert([
            'role' => 'Student'
        ]);

        DB::table('roles')->insert([
            'role' => 'Teacher'
        ]);
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        DB::table('users')->insert([
            'full_name'=>'Dinh Anh Dung',
            'user_name'=>'dinhanhdung',
            'password' => bcrypt('123456'),
            'email'=> 'dinhanhdung@gmail.com',
            'role_id' => '2',
            'date_of_birth' => '1996/11/21'
        ]);


        for($i = 0; $i < 100; $i++)
        {
            DB::table('users')->insert([
                'full_name' => $faker->name,
                'user_name' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('12345678'),
                'role_id' => rand(1, 2),
                'date_of_birth' => $faker->dateTimeBetween('-80 years', 'now'),
                'created_at' => $faker->dateTimeBetween('-10 years', 'now'),
                'updated_at' => date('Y/m/d')
            ]);
        }

        $users = \App\User::all();
        foreach ($users as $user)
        {
            $user_role = Null;
            if($user->role_id == 1){
                $user_role = new \App\Student();
                $user_role->class = $faker->randomLetter;
            }
            else{
                $user_role = new \App\Teacher();
                $user_role->dept = $faker->jobTitle;
                $user_role->level = 'assoc.prof';
            }
            $user_role->user_id = $user->id;
            $user_role->school =  'soict';
            $user_role->university = $faker->city;
            $user_role->save();
            if($user->role_id == 2){
                for($i =0; $i < 100; $i++) {
                    $course = new \App\Course();
                    $course->course_name = $faker->firstNameMale;
                    $course->max_students = rand(20, 40);
                    $course->max_groups = rand(3, 5);
                    $course->teacher_id = $user_role->id;
                    $course->start_date = $faker->dateTimeBetween('now', '17 days');
                    $course->end_date = $faker->dateTimeBetween('now', '2 years');
                    $course->save();
                    $course = \App\Course::where('course_name', '=' ,$course->course_name)->get()->first();
                    for($j = 0; $j < 10; $j++) {
                        $lesson = new \App\Lesson();
                        $lesson->no = $j+1;
                        $lesson->title = $faker->firstNameMale;
                        $lesson->note = "ABCsdfkljsdafklasdjfklasdjfkljfkwejqioqweufjndfhsdal;navlk;fasdjf;asdf
                        asdfkljasdfkljsdfkljsdalfkjsdalfjsdflsdjafklasdfjsdlakfjasdlkfj";
                        $lesson->content = "asdlfjsdaklfjsdaklfjsdaklfjsdklafjsdklafjasdklfjsdaklfjasdklfjsdklfjasdklfj
                        dflksdajflaskdfjsdklafjsdklafjasdklfjasdklfjweiofjweiofns;vjasdil;jhas;ifjweio;kofn";
                        $lesson->course_id = $course->id;
                        $lesson->save();
                    }
                }
            }
        }

        $students = \App\Student::all();
        $courses = \App\Course::all();
        $students_count = count($students);
        foreach($courses as $course)
        {
            $number_of_student = rand(20, $course->max_students);
            for ($i = 0; $i < $number_of_student; $i++)
            {
                $index = rand(1, $students_count-1);
                $enroll = new \App\Enrollment();
                $enroll->student_id = $students[$index]->id;
                $enroll->course_id = $course->id;
                $enroll->save();
            }
        }

        $teachers = \App\Teacher::all();

    }



}
