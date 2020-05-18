//どっかでNULLになってる？

$(function() {
	// 検索ボタンがクリックされたら処理が走ります。
	$('#ajax').click(function() {

		// ここからajaxの処理です。
		$.ajax({
			// POST通信
			type : "POST",
			// ここでデータの送信先URLを指定します。
			url : "InventoryResult.php",
			dataType:'text',
			data : {name:$('#name').val()},
			// 処理が成功したら
			success : function(name, dataType) {
				// HTMLファイル内の該当箇所にレスポンスデータを追加します。
				$('#result').html(name);
			},
			// 処理がエラーであれば
			error : function() {
				alert('通信エラー');
			}
		});
		// submitによる画面リロードを防いでいます。
		return false;
	});
});
