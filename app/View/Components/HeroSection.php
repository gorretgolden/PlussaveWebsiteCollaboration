public $backgroundImage;
    public $text;
    public $buttonText;

    public function __construct($backgroundImage, $text, $buttonText)
    {
        $this->backgroundImage = $backgroundImage;
        $this->text = $text;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.hero-section');
    }
