<?

class App
{
    public $__controller = 'Home', $__action = 'index', $params = [];
    function __construct()
    {
        $this->hanleUrl();
    }
    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO']))
            $url = $_SERVER['PATH_INFO'];

        else
            $url = '/';

        return $url;
    }
    function hanleUrl()
    {

        $url = $this->getUrl();

        $urlArr = explode('/', $url);

        $urlArr = array_filter($urlArr);

        $urlArr = array_values($urlArr);

        // xử lý params đầu tiên là controller

        //nếu chưa có params thì về trang home
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        } else
            $this->__controller = ucfirst($this->__controller);

        if (file_exists('App/Controller/' . ($this->__controller) . '.php')) {
            include('Controller/' . ($this->__controller) . '.php');
            $this->__controller = new $this->__controller();


            //xử lý params thứ 2 là action hay là file tĩnh
            if (!empty($urlArr[1])) {
                if (strpos($urlArr[1], '.html') or strpos($urlArr[1], '.php')) {

                    $this->params = [$urlArr[1]];
                } else {
                    $urlArr[1] =str_replace('-', '_', $urlArr[1]);
                    $this->__action = $urlArr[1];
                }
            }
            //xử lý các params còn lại là query string
            if (!empty($urlArr[2])) {
                unset($urlArr[1]);
                unset($urlArr[0]);

                $urlArr = array_values($urlArr);
                $this->params = $urlArr;
            }

            if (method_exists($this->__controller, $this->__action))
                call_user_func_array([$this->__controller, $this->__action], $this->params);
            else
                $this->loadError();
        } else
            $this->loadError();
    }

    function loadError()
    {
        include 'Errors/404.php';
    }
}
