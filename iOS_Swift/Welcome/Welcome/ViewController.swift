//
//  ViewController.swift
//  Welcome
//
//  Created by Jeff on 9/5/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    //My first interface builder action
    @IBAction func ShowMessage() {
        
        let alertController = UIAlertController(title: "Welcome to my 1st app!", message: "Hello Pleasant Hill", preferredStyle: UIAlertControllerStyle.Alert)
        
        alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
        
        //show my alert
        self.presentViewController(alertController, animated: true, completion: nil)
        
    }
}

