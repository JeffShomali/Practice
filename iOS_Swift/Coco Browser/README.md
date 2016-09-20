### COCO Browser
This is simple browser simulator. This app built with swift 3.

```swift

import UIKit

class ViewController: UIViewController,UITextFieldDelegate {

    //Textfild
    @IBOutlet weak var searchBox: UITextField!

    //Result View
    @IBOutlet weak var resultView: UIWebView!


    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
         self.searchBox.delegate = self
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }




    //Back Button
    @IBAction func back(_ sender: AnyObject) {
         resultView.goBack()
    }



    func textFieldShouldReturn(_ searchBox: UITextField) -> Bool {

        searchBox.resignFirstResponder()
        go(searchBox.text! as AnyObject)
        return true
    }


    //Go Button
    @IBAction func go(_ sender: AnyObject) {
        if searchBox.text == "" {  //if searchbox is emty return nothing
            return
        }
        guard let text:String = searchBox.text else { // else hold as constant
            return
        }

        //VLIDATION ***
        if text.range(of: ".") != nil{  //if user is looking for website like .com , .gov, .biz means if have DOT pattern making formatted url = http://www.jeffshomali.com
             var formattedURL = text.lowercased()    //JEFFSHOMALI.COM = jeffshomali.com
            if formattedURL.range(of: "http://") == nil {
                formattedURL = "http://\(formattedURL)"
            }
            self.loadingURL(formattedURL) //then pass constant text into loadingURL function
        } else {
            let searchString  = text.replacingOccurrences(of: " ", with: "+")
            let formattedURL = "https://www.google.com/search?q=\(searchString)"
            self.loadingURL(formattedURL)
        }


    }
    //Funcion to Load the URL
    func loadingURL(_ _url: String){
        let url = URL(string: _url)!
        let request = URLRequest(url: url) //passing url
        //force resultView load the URL request data
        resultView.loadRequest(request);
    }

    //Forward Button
    @IBAction func forward(_ sender: AnyObject) {
        resultView.goForward()
    }

}

```

### Result
![Result](https://github.com/JeffShomali/Practice/blob/master/iOS_Swift/Coco%20Browser/result.gif?raw=true)
