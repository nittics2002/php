<?php

/**
*   DirectoryConfigReader
*
*   @version 210822
*/

declare(strict_types=1);

namespace Concerto\conf\reader;

use RuntimeException;
use SplFileInfo;
use Concerto\conf\ConfigReaderInterface;
use Concerto\conf\reader\{
  AbstractConfigReader,
  ConfigReaderArray,
  ConfigReaderIni,
  ConfigReaderJson,
  ConfigReaderXml,
};

class DirectoryConfigReader implements ConfigReaderInterface
{
  /**
  * @var array 
  */
  private array $readers = [
    '' => 'AbstractConfigReader',
    'php' => 'ConfigReaderArray',
    'ini' => 'ConfigReaderIni',
    'json' => 'ConfigReaderJson',
    'xml' => 'ConfigReaderXml',
  ];

    /**
     *  base_path
     *
     *  @var string
     */
    protected string $base_path = '';
    
    /**
    *   __construct
    *
    * @param string $base_path
    */
    public function __construct(
      string $bath_path
    ){
        $this->base_path = $base_path;
    }
    
    /**
     *   {inherit}
     */
    public function read(): array
    {
      $this->errors = [];

      $fileInfo = new SplFileInfo($base_path);
      
      if (!fileInfo->isDir()) {
        throw new RuntimeException(
            "bath path is not exists:{$this->base_path}"
        );
      }

      $directory = new RecursiveDirectoryIterator(
        $base_path,
        FilesystemIterator::KEY_AS_PATHNAME |
        FilesystemIterator::CURRENT_AS_FILEINFO |
        FilesystemIterator::SKIP_DOTS
      );

      foreach($directory as $path => $config_file) {
        if ($config_file->isDir()) {
          continue;
        }

        if ($config_file->isReadable) {
          $this->errors[] = $config_file->getRealPath();
          continue;
        }







    }

    /**
    *    
    *
    *   @param SplFileInfo $basePathFileInfo
    *   @return string
    */
    protected function aaa(
      SplFileInfo $basePathFileInfo
    ):string{



    }


    /**
    *   fileInfoToFqdn
    *
    *   @param SplFileInfo $fileInfo
    *   @return string
    */
    protected function fileInfoToFqdn(
      SplFileInfo $fileInfo
    ):string{
      $extension = $fileInfo->getExtension();

    if (!array_key_exists(
      $extension,
      $this->readers,
    ){
      return '';
    }

    $reflectionClass = new ReflectionClass(
      $this->readers[$extension]
    );
    
    return $reflectionClass->getName();
    }

}
