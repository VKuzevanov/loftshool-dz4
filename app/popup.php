<div id="popup1"class="">
    <div class="form-popup-content">
        <div class="form-popup-title-wrap">
                	<h3 class="form-popup-title">Добовление проекта</h3>
					<a  href="javascript:PopUpHide()" class="close-popup-link">Закрыть форму</a>
        </div>
                    <div class="popup-entry">
                        <div id="error" class="form-tooltip form-error hidden">
                            <span class="toolltip-title">Ошибка!</span>
                            невозможно добавить проект
                        </div>   
                    <div id="upload-done" class="form-tooltip form-done hidden">
                        <span class="toolltip-title">Ура!</span>
                       проект успешно добавлен
                    </div>  
                    <form name="addProject" action="#" method="post" id="addProject" >
                    	
                    	<div class="form-input-wrap js-input-wrap">
                    		<label for="name-project" class="form-block label-form">Название проекта</label>
                    		<input type="text" id="name-project" class="form-block input-form " name="name-poject" placeholder="Введите название" data-validation="nameProject">
                            <div class="tooltip-input-error tooltip-error-left hidden">Введите название</div>
                    	</div>
                            
                    	<div class="form-input-wrap js-input-wrap">
                    		<label for="upload" class="form-block label-form" id="file_name">Картинка проекта</label>
                    			
                    				<input id="fileName" class="form-block input-form" readonly="readonly" placeholder="Загрузите изображение" >
                    		        <input type="file" id="upload" class="upload-input" name="upload" onchange="document.getElementById('fileName').value=this.value;" enctype="multipart/form-data" data-validation="uploadProject" >
                                    <div class="upload-button"></div>
                    		
                            <div class="tooltip-input-error tooltip-error-left hidden">Изображение</div>
                    	</div>

                    	<div class="form-input-wrap js-input-wrap">
                    		<label for="url-project" class="form-block label-form">URL проекта</label>
                    		<input type="text" id="url-project" class="form-block input-form" name="url-project" placeholder="Добавте ссылку" data-validation="urlProject">
                            <div class="tooltip-input-error tooltip-error-left hidden">Ссылка на проект</div>
                    	</div>

                    	<div class="form-input-wrap js-input-wrap">
                    		<label for="description-project" class="form-block label-form">Описание</label>
                    		<textarea type="text" id="description-project" class="form-block input-form textarea-form" name="description-poject" placeholder="Пара слов о Вашем проекте" data-validation="txtProject"></textarea> 
                            <div class="tooltip-input-error tooltip-error-left hidden">Описание проекта</div>
                    	</div>

                    	<div class="form-submit-wrap js-input-wrap">
                    		<input type="submit" name="submit" class="form-submit-button" value="Добваить">
                    	</div>
                    </form>
    </div>
</div>
</div>