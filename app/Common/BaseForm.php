<?php 

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
abstract class BaseForm 
{
    protected $validation;

    private $validator;

    public function __construct(ValidatorFactory $validator)
    {
        $this->validator = $validator;
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function validate(array $formData)
    {
        $this->validation = $this->validator->make($formData, $this->rules());
        if ($this->validation->fails()) {
            throw new FormValidationException('Validation Failed', $this->getValidationErrors());
        }
        return true;
    }

    protected function getValidationErrors()
    {
        return $this->validation->errors();
    }

    abstract protected function rules();
} // END BaseForm class 