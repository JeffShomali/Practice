//
//  ViewController.swift
//  FormLetter
//
//  Created by Jeff on 9/9/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

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
    
    
    //This is old and worked in iOS version 8
    // override func touchesBegan(touches: NSSet, withEvent event: UIEvent) {
        //        self.view.endEditing(true)
    //    }
    
    
    override func touchesBegan(touches: Set<UITouch>, withEvent event: UIEvent?) {
        self.view.endEditing(true)

    }
    
}//end

