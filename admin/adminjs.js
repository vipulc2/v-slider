jQuery(function() {

  jQuery("#btnImage").on("click", function() {
      var images = wp.media({
          title: "Upload Image for Slider",
          multiple: false
      }).open().on("select", function(e) {
          var uploadedImages = images.state().get("selection").first();
          var selectedImages = uploadedImages.toJSON();

          jQuery("#image-preview").attr("src", selectedImages.url);

          // selectedImages.forEach((eachimage) => {

          //   // console.log(eachimage.url);


          //   let newimagefield = document.createElement("IMG");





          // });

          // let screen = document.querySelector("#image_attachment_id");


          // console.log(selectedImages.title + "  " + selectedImages.url + "   " + selectedImages.filename);

          /*selectedImages.map(function(image){
           var itemDetails = image.toJSON();
           console.log(itemDetails.url);
           });*/

      });
  });
});  