<?php

declare(strict_types=1);

namespace Rector\TypeDeclaration\Tests\Rector\Property\CompleteVarDocTypePropertyRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\TypeDeclaration\Rector\Property\CompleteVarDocTypePropertyRector;

final class CompleteVarDocTypePropertyRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return CompleteVarDocTypePropertyRector::class;
    }
}
