<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'clearPassword' => [parent::class, 'clearPassword', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'fullName' => [parent::class, 'fullName', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'likes' => [parent::class, 'likes', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'pseudo' => [parent::class, 'pseudo', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        'clearPassword' => [parent::class, 'clearPassword', null],
        'comments' => [parent::class, 'comments', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'email' => [parent::class, 'email', null],
        'fullName' => [parent::class, 'fullName', null],
        'id' => [parent::class, 'id', null],
        'likes' => [parent::class, 'likes', null],
        'password' => [parent::class, 'password', null],
        'pseudo' => [parent::class, 'pseudo', null],
        'roles' => [parent::class, 'roles', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
