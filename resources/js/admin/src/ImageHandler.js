import Cropper from 'cropperjs';

export default class ImageHandler {
    
    constructor($options)
    {
        this.form = $options.form;
        this.hiddenAvatar = $options.hiddenAvatar;
        this.image = $options.image;
        this.canvas = $options.canvas;
        this.input = $options.input;
        this.btnOk = $options.btnOk;
        this.modal = $options.modal;
        this.input.on('change', $e => this.readURL($e.target.files));
        this.btnOk.on('click', $e => this.crop());
        
        this.setListeners();
    }
    
    setListeners()
    {
        $('#modal-cropper').on('shown.bs.modal', () => {
            this.cropper = new Cropper(this.canvas[0], {
                aspectRatio: 1 / 1,
                dragMode: 'none',
            });
        }).on('hidden.bs.modal', () => {
            this.cropper.destroy();
            this.cropper = null;
        });
    }
    
    selectImage()
    {
        this.input.click();
    }
    
    readURL($files)
    {
        let self = this;
        
        if ($files && $files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                // self.image.attr('src', e.target.result);
                self.canvas.attr('src', e.target.result);
                self.modal.modal('show');
            };
            reader.readAsDataURL($files[0]);
        }
    }
    
    crop()
    {
        this.modal.modal('hide');
        
        let croppedData = this.cropper.getCroppedCanvas({
            minWidth: 200,
            minHeight: 200,
            maxWidth: 600,
            maxHeight: 600,
            fillColor: '#fff',
            imageSmoothingEnabled: true,
            imageSmoothingQuality: 'high',
        });
        
        croppedData.toBlob($blob => {
            let urlCreator = window.URL || window.webkitURL;
            this.image[0].src = urlCreator.createObjectURL($blob);
            this.blob = $blob;
    
            let reader = new FileReader();
            reader.readAsDataURL($blob);
            reader.onloadend = () => this.hiddenAvatar.val(reader.result);
            
            let form = document.getElementById('userForm');
            let formData = new FormData(form);
            formData.append('avatar_file', $blob);
            
            // avatar_file
            
            // const formData = new FormData();
            //
            // formData.append('croppedImage', $blob);
            //
            // // Use `jQuery.ajax` method
            // $.ajax('/path/to/upload', {
            //     method: "POST",
            //     data: formData,
            //     processData: false,
            //     contentType: false,
            //     success() {
            //         console.log('Upload success');
            //     },
            //     error() {
            //         console.log('Upload error');
            //     },
            // });
        });
    }
    
    getFormDataWithImage($form, $imageName)
    {
        let form = document.getElementById('userForm');
        let formData = new FormData(form);
        
        if(this.blob) formData.append($imageName, this.blob);
        
        return formData;
    }
}
