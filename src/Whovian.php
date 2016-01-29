<?php
class Whovian
{
    /**
     *  @var string
     */
    protected $favoriteDoctor;
    
    /**
     *  Konstruktor
     *  @param string $favoriteDoctor
     */
    public function __construct($favoriteDoctor) 
    {
        $this->favoriteDoctor = (string) $favoriteDoctor;
    }
    
    /**
     *  Powiedz
     *  @return string
     */
    public function say()
    {
        return 'Najlepszy doktor to ' . $this->favoriteDoctor;
    }
    
    /**
     *  Odpowiedz
     *  Szuka nazwiska mojego doktora w innej opinii 
     *  @param string $otherOpinion
     *  @return string
     *  @throws \Exception
     */
    public function respondTo($otherOpinion) 
    {
        $otherOpinionLowered = strtolower($otherOpinion);
        $myDoctorLowered = strtolower($this->favoriteDoctor);
        
        if (strpos($otherOpinionLowered, $myDoctorLowered) === false) {
            throw new Exception(
                sprintf("Nie zgadzam się. %s!", $this->say())
            );
        }
        
        return "Zgadzam się.";
    }
}
?>