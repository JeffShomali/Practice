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

    //Listeners Here
    //Back Button
    @IBAction func back(sender: AnyObject) {
         resultView.goBack()
    }
    //Go Button
    @IBAction func go(sender: AnyObject) {
        //if searchbox is emty return nothing
        if searchBox.text == "" {
            return
        }
        // else hold as constant
        guard let text:String = searchBox.text else {
            return
        }
    }
    //Forward Button
    @IBAction func forward(sender: AnyObject) {
        resultView.goForward()
    }
    
}

