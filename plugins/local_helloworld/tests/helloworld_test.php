<?php
defined('MOODLE_INTERNAL') || die();

use PHPUnit\Framework\TestCase;

class local_helloworld_testcase extends TestCase {
    public function test_sanity_check() {
        $this->assertTrue(true);
    }
}
