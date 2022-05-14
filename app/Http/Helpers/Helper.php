<?php

/*function added(){
    alert()->success('Added successfully !');
}
function updated(){
    alert()->success('Updated successfully !');
}

function deleted(){
    alert()->success('Deleted successfully !');
}*/

class responder
{
    public static function success($data)
    {
        return response()->json(['status' => true, 'data' => $data]);
    }

    public static function error($data)
    {
        return response()->json(['status' => false, 'msg' => $data]);
    }

}
