<?php

 
session_start();
if (isset($_SESSION['userid'])) {
    if (isset($_SESSION['pg'])) {
        
        
         if ($_SESSION['pg'] == 'users_financial_das') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/users_financial_das.php";
            require_once "./templates/footer.php";
        } 

        if ($_SESSION['pg'] == 'users_das') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/users_das.php";
            require_once "./templates/footer.php";
        } 

        if ($_SESSION['pg'] == 'add_members') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_members.php";
            require_once "./templates/footer.php";
        }
        
        if ($_SESSION['pg'] == 'member_del') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/del_members_action.php";
            require_once "./templates/footer.php";
        }
        
        if ($_SESSION['pg'] == 'add_bill_items') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_items.php";
            require_once "./templates/footer.php";
        }  

        if ($_SESSION['pg'] == 'add_acc_inexp') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_acc_inexp.php";
            require_once "./templates/footer.php";
        }  

        if ($_SESSION['pg'] == 'add_amt_inexp') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_amt_inexp.php";
            require_once "./templates/footer.php";
        }  


        if ($_SESSION['pg'] == 'add_bank_details') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bank_details.php";
            require_once "./templates/footer.php";
        }  

        if ($_SESSION['pg'] == 'bank_deposits') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_deposits.php";
            require_once "./templates/footer.php";
        }  

        if ($_SESSION['pg'] == 'bank_withdrawals') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_withdrawals.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_houses') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_houses.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bill_preparation') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_preparation.php";
            require_once "./templates/footer.php";
        }

       

        if ($_SESSION['pg'] == 'payments_ledger') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/payments_ledger.php";
            require_once "./templates/footer.php";
        }
        


        if ($_SESSION['pg'] == 'add_bill_to_ledger') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_to_ledger.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'members_payment_list') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/members_payment_list.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'payments_ledger') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/payments_ledger.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_amt_inexp_income') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_amt_inexp_income.php";
            require_once "./templates/footer.php";
        }

        
        if ($_SESSION['pg'] == 'add_amt_inexp_expense') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_amt_inexp_expense.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_event.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_role_call') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_event_role_call.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'appraisal_list') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/appraisal_list.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'appraisal_add_member') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/appraisal_add_member.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'add_event_role_call_view') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_event_role_call_view.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'add_members_new') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_members_new.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'ranks_members_view') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/ranks_members_view.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_houses_edit') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_houses_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_houses_delete') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_houses_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_members_new_edit') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_members_new_edit.php";
            require_once "./templates/footer.php";
        }
        if ($_SESSION['pg'] == 'add_members_delete') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_members_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'appraisal_edit_member') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/appraisal_edit_member.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'appraisal_delete_member') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/appraisal_delete_member.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_edit') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_event_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_delete') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/add_event_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bill_items_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_items_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bill_items_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_items_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bill_prep_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_prep_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bill_prep_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bill_prep_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'payments_ledger_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/payments_ledger_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'payments_ledger_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/payments_ledger_delete.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'add_incomeexpedit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_incomeexpedit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_incomeexpeditdel') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_incomeexpeditdel.php";
            require_once "./templates/footer.php";
        }
        if ($_SESSION['pg'] == 'add_amt_ex_inc') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_amt_ex_inc.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_amt_ex_inc_del') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_amt_ex_inc_del.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'add_bank_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bank_edit.php";
            require_once "./templates/footer.php";
        }

        
        if ($_SESSION['pg'] == 'add_bank_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bank_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_bank_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/add_bank_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'bank_deposit_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_deposit_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'bank_deposit_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_deposit_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'bank_withdrawals_edit') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_withdrawals_edit.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'bank_withdrawals_delete') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bank_withdrawals_delete.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'org_details') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/org_details.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'membber_picture_upload') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/membber_picture_upload.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'browse_member_photo') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/browse_member_photo.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'income_statement_account') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/income_statement_account.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'member_payments_statement') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/member_payments_statement.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'change_password_finance') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/change_password_finance.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'children_list') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/children_list.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'children_add_member') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/children_add_member.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'change_password_secretary') {
            require_once "./templates/header.php";
            require_once "./templates/secretary_navbar.php";
            require_once "./pages/change_password_secretary.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'knight_officer_das') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/knight_officer_das.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'change_password_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/change_password_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_houses_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_houses_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_members_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_members_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'ranks_members_view_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/ranks_members_view_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_houses_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_houses_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_event_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_role_call_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_event_role_call_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'add_event_role_call_view_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/add_event_role_call_view_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'users_financial_das_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/users_financial_das_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'member_payments_statement_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/member_payments_statement_ko.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'income_statement_account_ko') {
            require_once "./templates/header.php";
            require_once "./templates/knight_navbar.php";
            require_once "./pages/income_statement_account_ko.php";
            require_once "./templates/footer.php";
        }


        if ($_SESSION['pg'] == 'individual_bill_list') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/individual_bill_list.php";
            require_once "./templates/footer.php";
        }

        if ($_SESSION['pg'] == 'bill_add_member') {
            require_once "./templates/header.php";
            require_once "./templates/accountant_navbar.php";
            require_once "./pages/bill_add_member.php";
            require_once "./templates/footer.php";
        }


        //bill_add_member


        

        if ($_SESSION['pg'] == 'logout') {require_once './pages/logout.php'; }
        
         
        
          
        
         
        
      
      
    }  else {
        
           header('Location:' . '../index');
        
    }
     
}
else {header('Location:' . '../index');}

?>