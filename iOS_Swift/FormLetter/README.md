##### Working with form in Swift

```Swift

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var myName: UITextField!
  
    @IBOutlet weak var myAmount: UITextField!

    @IBOutlet weak var myFamily: UITextField!

    @IBOutlet weak var myTemplate: UITextView!
    
    @IBOutlet weak var myLetter: UITextView!
    
    
    //Event listener like jQuery event listener
    @IBAction func generateLetter() {
        self.myLetter.text = self.myTemplate.text.stringByReplacingOccurrencesOfString("<name>", withString: self.myName.text!)
        self.myLetter.text = self.myLetter.text.stringByReplacingOccurrencesOfString("<amount>", withString: self.myAmount.text!)
        self.myLetter.text = self.myLetter.text.stringByReplacingOccurrencesOfString("<family>", withString: self.myFamily.text!)
    }
    
    
    override func touchesBegan(touches: Set<UITouch>, withEvent event: UIEvent?) {
        self.view.endEditing(true)

    }
    
}//end
```

![Result](https://github.com/JeffShomali/Practice/blob/master/iOS_Swift/FormLetter/Result.png?raw=true)

