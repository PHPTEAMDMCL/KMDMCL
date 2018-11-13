var app = angular.module('app',['firebase'],function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('note9',['$scope','$firebase',function($scope,$firebase){
  
        var ref      = new Firebase("https://dien-may-cho-lon.firebaseio.com/note9_Gift");
        var reftitle = new Firebase("https://dien-may-cho-lon.firebaseio.com/note9_Gift");
    
    var sync         = $firebase(ref);
    var synctitle    = $firebase(reftitle.orderByChild('status').equalTo('new'));
    $scope.today     = new Date();
    $scope.members   = sync.$asArray();
    $scope.title     = synctitle.$asArray();
    var updatetitle  = {
        status: 'old'
    };
    var keyArray     = [];
    $scope.sendUser  = function(){
        $scope.today = new Date();
        var error    = 0;
        if(!$scope.name){
            alert("Tên đăng ký không hợp lệ!");
            $scope.name  = "";
            $scope.phone = "";
            error = 1;
            return false;
        }
       
        if (!$scope.phone) {
            alert(" Số điện thoại không hợp lệ!");
            $scope.phone = "";
            error = 1;
            return false;
        }
        else
        {
          if(!checkPhoneNumber($scope.phone))  
          {
            alert(" Số điện thoại không đúng định dạng!");
            $scope.phone = "";
            error = 1;
            return false;
          }
        }
       
        var member = {
            name: $scope.name,
            phone: $scope.phone,
        
            today : $scope.today.toString()
        };

        if(error == 0){
            $scope.members.$add(member);
            alert("Cảm ơn bạn đã đặt hàng. Chúng tôi sẽ liên hệ lại để tư vấn cho bạn !");
            $scope.name  = "";
            $scope.phone = "";
            $scope.today = "";
            return false;
        }
        else
        {
            error = 0;
        }
    }
    $scope.curPage = 0;
    $scope.pageSize = 15;
    $scope.numberOfPages = function(){
        return Math.ceil($scope.members.lenght / $scope.pageSize);
    };
}]);
angular.module('app').filter('pagination',function(){
    return function(input,start){
        start = +start;
        return input.slice(start);
    };
});
function checkPhoneNumber(phonenumber) {
    var flag = false;
    var phone = phonenumber.trim(); 
    phone = phone.replace('(+84)', '0');
    phone = phone.replace('+84', '0');
    phone = phone.replace('0084', '0');
    phone = phone.replace(/ /g, '');
    if (phone != '') {
        var firstNumber = phone.substring(0, 2);
        if ((firstNumber == '09' || firstNumber == '08') && phone.length == 10) {
            if (phone.match(/^\d{10}/)) {
                flag = true;
            }
        } else if (firstNumber == '01' && phone.length == 11) {
            if (phone.match(/^\d{11}/)) {
                flag = true;
            }
        }
    }
    return flag;
};
function changestatus(identifier) {
    if(window.location.hostname == 'dienmaycholon.vn')
    {
        new Firebase("https://dien-may-cho-lon.firebaseio.com/samsung_RL4364SBABS/"+$(identifier).data('id')).update({
            status: 'old'
        });
    }
    else
    {
        new Firebase("https://testfirebase-a4fda.firebaseio.com/testsamsung_RL4364SBABA/"+$(identifier).data('id')).update({
            status: 'old'
        });
    }
}