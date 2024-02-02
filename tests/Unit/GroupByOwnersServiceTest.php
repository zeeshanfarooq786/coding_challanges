<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\GroupByOwnersService;

class GroupByOwnersServiceTest extends TestCase
{
    /** @test */
    public function it_groups_files_by_owners()
    {
        $files = [
            "insurance.txt" => "Company A",
            "letter.docx" => "Company A",
            "Contract.docx" => "Company B"
        ];

        $expectedResult = [
            "Company A" => ["insurance.txt", "letter.docx"],
            "Company B" => ["Contract.docx"]
        ];

        $service = new GroupByOwnersService();
        $result = $service->groupByOwners($files);

        $this->assertEquals($expectedResult, $result);
    }
}
