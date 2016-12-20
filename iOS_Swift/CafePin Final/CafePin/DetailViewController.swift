//
//  DetailViewController.swift
//  CafePin
//
//  Created by Jeff on 12/11/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class DetailViewController: UIViewController {
    
    @IBOutlet var cafeImageView:UIImageView!
    var cafeImage:String!
    var cafeName:String!
    var cafeType:String!
    var cafeLocation:String!
    
    

    override func viewDidLoad() {
        super.viewDidLoad()
        self.cafeImageView.image = UIImage(named: cafeImage)
        title = self.cafeName

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

  
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
        let destinationController = segue.destination as! NoteViewController
        destinationController.noteName = self.cafeName
        destinationController.noteLocation = self.cafeLocation
        destinationController.noteType = self.cafeType
        
        
        
    }
    

}
