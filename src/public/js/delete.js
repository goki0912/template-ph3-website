document.addEventListener("DOMContentLoaded", function () {
    // 削除ボタンをクリックしたら対応するモーダルを表示する
    var deleteButtons = document.querySelectorAll(".delete-button");
    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            var quizId = this.closest("form").getAttribute("data-quiz-id");
            var modal = document.getElementById(`modal-${quizId}`);
            modal.style.display = "block";
        });
    });

    // モーダルのキャンセルボタンをクリックしたらモーダルを非表示にする
    var modalCloseButtons = document.querySelectorAll(".modal-close");
    modalCloseButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var modal = this.closest(".modal");
            modal.style.display = "none";
        });
    });

    // モーダルの削除ボタンをクリックしたらフォームを送信する
    var modalConfirmButtons = document.querySelectorAll(".modal-confirm");
    modalConfirmButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var quizId = this.closest(".modal")
                .getAttribute("id")
                .split("-")[1];
            var form = document.querySelector(`form[data-quiz-id="${quizId}"]`);
            form.submit();
        });
    });
});
