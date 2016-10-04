//  CustomTableViewCell.swift
//  CafePin
//  Created by Jeff on 10/2/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class CustomTableViewCell: UITableViewCell {
    
    //Declare outlet variables
    @IBOutlet weak var nameLabel: UILabel!
    @IBOutlet weak var locationLabel: UILabel!
    @IBOutlet weak var typeLabel: UILabel!
    @IBOutlet weak var thumbnailImageView: UIImageView!
    
    
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
