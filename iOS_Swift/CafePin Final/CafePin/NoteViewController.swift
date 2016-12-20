//
//  NoteViewController.swift
//  CafePin
//
//  Created by Jeff on 12/11/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class NoteViewController: UIViewController {
    
    @IBOutlet weak var cafeName:UILabel!
    @IBOutlet weak var cafeLocation:UILabel!
    @IBOutlet weak var cafeType:UILabel!
    
    @IBAction func done(sender: UIButton) {
        self.dismiss(animated: true, completion: nil)
    }
    
    var noteName:String!
    var noteLocation:String!
    var noteType:String!
    
    
    

    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
        self.cafeName.text = noteName
        self.cafeLocation.text = noteLocation
        self.cafeType.text = noteType
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
