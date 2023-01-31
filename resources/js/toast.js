window.toastr = require('toastr');

// エラーの場合
if($('.validate-error').length){
    toastr.warning('エラーが発生しました');
}