$(document).ready(function() {
    $('#task_create').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'add.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success == "1")
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});
$(document).ready(function() {
    $('#task_delete').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'delete.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success == "1")
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});