<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'matric_no' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'course' => 'Lorem ipsum dolor sit amet',
                'gpa' => 1.5,
                'created' => '2026-01-28 19:34:09',
                'modified' => '2026-01-28 19:34:09',
            ],
        ];
        parent::init();
    }
}
