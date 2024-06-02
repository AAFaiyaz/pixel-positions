<?php

use it;
use App\Models\Job;
use App\Models\Employer;

it('it belongs to an employer', function () {
    // expect(true)->toBeFalse();
    // AAA
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();

    // Assert
});