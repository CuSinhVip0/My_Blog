<? 
class Controller {
    public function getModel($model){
        if(file_exists('App/Model/'.$model.'.php')){
            include 'App/Model/'.$model.'.php';
            return new $model();
        }
    }
}