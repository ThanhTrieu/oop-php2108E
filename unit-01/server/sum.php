<?php
class SumNumber
{
    public function showResult()
    {
        $arrNumbers = $this->getInputData();
        $n1 = $arrNumbers[0] ?? 0;
        $n2 = $arrNumbers[1] ?? 0;
        return $this->caculate($n1, $n2);
    }

    public function getInputData()
    {
        $result = [];
        if(isset($_POST['btnSum'])){
            $n1 = $_POST['number_1'] ?? '';
            $n1 = is_numeric($n1) ? $n1 : 0;

            $n2 = $_POST['number_2'] ?? '';
            $n2 = is_numeric($n2) ? $n2 : 0;

            $result = [$n1, $n2];
        }
        return $result;
    }

    private function caculate($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function redirectView()
    {
        $res = $this->showResult();
        header('Location:../sum-number.php?res='.$res);
    }
}
$cal = new SumNumber;
$cal->redirectView();