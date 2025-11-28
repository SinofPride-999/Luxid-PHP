<?php

namespace engine\system\form;

use engine\system\Entity;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public Entity $entity;
    public string $attribute;

    public function __construct(Entity $entity, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->entity = $entity;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        $hasError = $this->entity->hasError($this->attribute);

        return sprintf('
            <label for="%s">%s</label>
            <input
                type="%s"
                name="%s"
                value="%s"
                class="%s"
            >
            <div class="invalid_feedback" style="display: %s;">
                %s
            </div>
        ',
            $this->attribute,                                
            ucfirst($this->attribute),                       
            $this->type,                                     
            $this->attribute,                                
            htmlspecialchars($this->entity->{$this->attribute} ?? ''), 
            $hasError ? 'error' : '',                        
            $hasError ? 'block' : 'none',                    
            $this->entity->getFirstError($this->attribute)   
        );
    }


    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;

        return $this;
    }
}

