'use strict';

//Pagination Products
$(document).ready(function () {
    var numberOfItems = $('#fd-loop tr').length;
    var limitPerPage = 4; 
    $('#fd-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.prod").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.prod").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.prod").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.prod li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.prod li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#fd-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#fd-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.prod li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.prod li").removeClass('active'); 
            $("#fd-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#fd-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.prod li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.prod li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.prod li").removeClass('active'); 
            $("#fd-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#fd-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.prod li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
    
});


//Pagination Category
$(document).ready(function () {
    var numberOfItems = $('#cat-loop tr').length;
    var limitPerPage = 3; 
    $('#cat-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.cat").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.cat").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.cat").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.cat li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.cat li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#cat-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#cat-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.cat li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.cat li").removeClass('active'); 
            $("#cat-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#cat-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.cat li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.cat li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.cat li").removeClass('active'); 
            $("#cat-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#cat-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.cat li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
        
});

//Pagination Customer
$(document).ready(function () {
    var numberOfItems = $('#ct-loop tr').length;
    var limitPerPage = 5; 
    $('#ct-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.ct").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.ct").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.ct").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.ct li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.ct li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#ct-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ct-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.ct li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.ct li").removeClass('active'); 
            $("#ct-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ct-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.ct li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.ct li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.ct li").removeClass('active'); 
            $("#ct-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ct-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.ct li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
        
});

//Pagination Order
$(document).ready(function () {
    var numberOfItems = $('#ord-loop tr').length;
    var limitPerPage = 5; 
    $('#ord-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.ord").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.ord").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.ord").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.ord li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.ord li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#ord-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ord-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.ord li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.ord li").removeClass('active'); 
            $("#ord-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ord-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.ord li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.ord li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.ord li").removeClass('active'); 
            $("#ord-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#ord-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.ord li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
        
});

//Pagination Payments
$(document).ready(function () {
    var numberOfItems = $('#pay-loop tr').length;
    var limitPerPage = 5; 
    $('#pay-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.pay").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.pay").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.pay").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.pay li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.pay li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#pay-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#pay-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.pay li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.pay li").removeClass('active'); 
            $("#pay-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#pay-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.pay li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.pay li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.pay li").removeClass('active'); 
            $("#pay-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#pay-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.pay li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
        
});



//Pagination Dashboard
$(document).ready(function () {
    var numberOfItems = $('#pay-loop tr').length;
    var limitPerPage = 5; 
    $('#dash-loop tr:gt(' + (limitPerPage - 1) + ')').hide(); 
    var totalPages = Math.round(numberOfItems / limitPerPage);
    $(".pagination.dash").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

    for (var i = 2; i <= totalPages; i++) {
        $(".pagination.dash").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }

    $(".pagination.dash").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label=Next>Next</a></li>");
    $(".pagination.dash li.page-item").on("click", function () {
        if ($(this).hasClass('active')) {
            return false; 
        } else {
            var currentPage = $(this).index();
            $(".pagination.dash li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#dash-loop tr").hide();
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#dash-loop tr:eq(" + i + ")").show(); 
            }
        }
    });
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination.dash li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++;
            $(".pagination.dash li").removeClass('active'); 
            $("#dash-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#dash-loop tr:eq(" + i + ")").show();
            }

            $(".pagination.dash li.page-item:eq(" + (currentPage - 1) + ")").addClass('active');
        }
    });
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination.dash li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination.dash li").removeClass('active'); 
            $("#dash-loop tr").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#dash-loop tr:eq(" + i + ")").show(); 
            }

            $(".pagination.dash li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
    });
        
});