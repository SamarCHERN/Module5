<?php
namespace App\Tests\Services;
use PHPUnit\Framework\TestCase;
use App\Services\FileSystemImproved;
class FileSystemImprovedTest extends TestCase
{
    public function testState()
    {
    $file =new FileSystemImproved();
    $this->assertSame(["File.txt","File2.txt"], $file->state());
    }

    public function testCreate()
    {
        $file =new FileSystemImproved();
        $this->assertSame(["File.txt","File2.txt"], $file->createFile("File2"));
    }

    public function testRead()
    {
        $file =new FileSystemImproved();
        $this->assertSame("CherniSamar", $file->readFile("File"));
    }

    public function testWrite()
    {
        $file =new FileSystemImproved();
        $this->assertSame(true, $file->writeInFile("File", "Testing"));
    }
    
    public function testDelete()
    {
        $file =new FileSystemImproved();
        $this->assertSame(true, $file->deleteFile("File2")); 
    }
    

}