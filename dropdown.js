$(document).ready(function () {

        load_json_data('exchange');

        function load_json_data(id, parent_id)
        {
            var html_code = '';
            $.getJSON('country_state_city.json', function (data) {

                html_code += '<option value="">Select ' + id + '</option>';
                $.each(data, function (key, value) {
                    if (id == 'exchange')
                    {
                        if (value.parent_id == '0')
                        {
                            html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                        }
                    } else
                    {
                        if (value.parent_id == parent_id)
                        {
                            html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                        }
                    }
                });
                $('#' + id).html(html_code);
            });

        }

        $(document).on('change', '#exchange', function () {
            var exchange_id = $(this).val();
            if (exchange_id != '')
            {
                load_json_data('coin', exchange_id);
            } else
            {
                $('#coin').html('<option value="">Select coin</option>');
                $('#city').html('<option value="">Select coin</option>');
            }
        });
        $(document).on('change', '#coin', function () {
            var coin_id = $(this).val();
            if (coin_id != '')
            {
                load_json_data('city', coin_id);
            } else
            {
                $('#city').html('<option value="">Select city</option>');
            }
        });
    });