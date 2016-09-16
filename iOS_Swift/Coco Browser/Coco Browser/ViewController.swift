//
//  ViewController.swift
//  Coco Browser
//
//  Created by Jeff on 9/15/16.
//  Copyright © 2016 Coco. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    //Textfild
    @IBOutlet weak var searchBox: UITextField!
    
    //Result View
    @IBOutlet weak var resultView: UIWebView!
    

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    
    //Back Button
    @IBAction func back(sender: AnyObject) {
         resultView.goBack()
    }
    
    //Go Button
    @IBAction func go(sender: AnyObject) {
        if searchBox.text == "" {  //if searchbox is emty return nothing
            return
        }
        guard let text:String = searchBox.text else { // else hold as constant
            return
        }
        
        //VLIDATION ***
        if text.rangeOfString(".") != nil{  //if user is looking for website like .com , .gov, .biz means if have DOT pattern making formatted url = http://www.jeffshomali.com
             var formattedURL = text.lowercaseString    //JEFFSHOMALI.COM = jeffshomali.com
            if formattedURL.rangeOfString("http://") == nil {
                formattedURL = "http://\(formattedURL)"
            }
            self.loadingURL(formattedURL) //then pass constant text into loadingURL function
        } else {
            let searchString  = text.stringByReplacingOccurrencesOfString(" ", withString: "+")
            let formattedURL = "https://www.google.com/search?q=\(searchString)"
            self.loadingURL(formattedURL)
        }
        
        
    }
    //Funcion to Load the URL
    func loadingURL(_url: String){
        let url = NSURL(string: _url)!
        let request = NSURLRequest(URL: url) //passing url 
        //force resultView load the URL request data
        resultView.loadRequest(request);
    }
    
    //Forward Button
    @IBAction func forward(sender: AnyObject) {
        resultView.goForward()
    }
    
}

