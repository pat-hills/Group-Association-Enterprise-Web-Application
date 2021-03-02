<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
$page = "";
$url = "";
session_start();
if (isset($_SESSION['userid'])) {
     $page = filter_input(INPUT_GET, 'inv17ml44', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
    if (isset($page)) {
      $member_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
      $_SESSION['member_id'] =$member_id; 
  
        if ($page == 'users_financial_das') {
            $_SESSION['pg'] = 'users_financial_das';
        }

        if ($page == 'users_das') {
            $_SESSION['pg'] = 'users_das';
        }


        if ($page == 'add_members') {
            $_SESSION['pg'] = 'add_members';
        } 

        if ($page == 'logout') {
            $_SESSION['pg'] = 'logout';
        }

        if ($page == 'member_del') {
            $_SESSION['pg'] = 'member_del';
        }   

        if ($page == 'add_bill_items') {
            $_SESSION['pg'] = 'add_bill_items';
        }   

        if ($page == 'add_acc_inexp') {
            $_SESSION['pg'] = 'add_acc_inexp';
        }   

        if ($page == 'add_amt_inexp') {
            $_SESSION['pg'] = 'add_amt_inexp';
        } 
        
        if ($page == 'add_bank_details') {
            $_SESSION['pg'] = 'add_bank_details';
        } 
        if ($page == 'bank_deposits') {
            $_SESSION['pg'] = 'bank_deposits';
        } 

        if ($page == 'bank_withdrawals') {
            $_SESSION['pg'] = 'bank_withdrawals';
        } 

        if ($page == 'add_houses') {
            $_SESSION['pg'] = 'add_houses';
        } 

        if ($page == 'add_bill_preparation') {
            $_SESSION['pg'] = 'add_bill_preparation';
        } 

        if ($page == 'add_bill_to_ledger') {
            $_SESSION['pg'] = 'add_bill_to_ledger';
        } 

       
        if ($page == 'payments_ledger') {
            $_SESSION['pg'] = 'payments_ledger';
        }

        if ($page == 'members_payment_list') {
            $_SESSION['pg'] = 'members_payment_list';
        }
        if ($page == 'payments_ledger') {
            $_SESSION['pg'] = 'payments_ledger';
        }

        if ($page == 'add_amt_inexp_income') {
            $_SESSION['pg'] = 'add_amt_inexp_income';
        }

        if ($page == 'add_amt_inexp_expense') {
            $_SESSION['pg'] = 'add_amt_inexp_expense';
        }
        if ($page == 'add_event') {   
            $_SESSION['pg'] = 'add_event';
        }

        if ($page == 'add_event_role_call') {   
            $_SESSION['pg'] = 'add_event_role_call';
        }
        if ($page == 'appraisal_list') {   
            $_SESSION['pg'] = 'appraisal_list';
        }

        if ($page == 'appraisal_add_member') {   
            $_SESSION['pg'] = 'appraisal_add_member';
        }


        if ($page == 'add_event_role_call_view') {   
            $_SESSION['pg'] = 'add_event_role_call_view';
        }

        if ($page == 'add_members_new') {   
            $_SESSION['pg'] = 'add_members_new';
        }

        if ($page == 'ranks_members_view') {   
            $_SESSION['pg'] = 'ranks_members_view';
        }

        if ($page == 'add_houses_edit') {   
            $_SESSION['pg'] = 'add_houses_edit';
        }
        if ($page == 'add_houses_delete') {   
            $_SESSION['pg'] = 'add_houses_delete';
        }
        if ($page == 'add_members_new_edit') {   
            $_SESSION['pg'] = 'add_members_new_edit';
        }
        if ($page == 'add_members_delete') {   
            $_SESSION['pg'] = 'add_members_delete';
        }

        if ($page == 'appraisal_edit_member') {   
            $_SESSION['pg'] = 'appraisal_edit_member';
        }

        if ($page == 'appraisal_delete_member') {   
            $_SESSION['pg'] = 'appraisal_delete_member';
        }

        if ($page == 'add_event_edit') {   
            $_SESSION['pg'] = 'add_event_edit';
        }

        if ($page == 'add_event_delete') {   
            $_SESSION['pg'] = 'add_event_delete';
        }

        if ($page == 'add_bill_items_edit') {   
            $_SESSION['pg'] = 'add_bill_items_edit';
        }

        if ($page == 'add_bill_items_delete') {   
            $_SESSION['pg'] = 'add_bill_items_delete';
        }

        if ($page == 'add_bill_prep_edit') {   
            $_SESSION['pg'] = 'add_bill_prep_edit';
        }

        if ($page == 'add_bill_prep_delete') {   
            $_SESSION['pg'] = 'add_bill_prep_delete';
        }

        if ($page == 'payments_ledger_edit') {   
            $_SESSION['pg'] = 'payments_ledger_edit';
        }

        if ($page == 'payments_ledger_delete') {   
            $_SESSION['pg'] = 'payments_ledger_delete';
        }


        if ($page == 'add_incomeexpedit') {   
            $_SESSION['pg'] = 'add_incomeexpedit';
        }

        if ($page == 'add_incomeexpeditdel') {   
            $_SESSION['pg'] = 'add_incomeexpeditdel';
        }

        if ($page == 'add_amt_ex_inc') {   
            $_SESSION['pg'] = 'add_amt_ex_inc';
        }

        if ($page == 'add_amt_ex_inc_del') {   
            $_SESSION['pg'] = 'add_amt_ex_inc_del';
        }


        if ($page == 'add_bank_edit') {   
            $_SESSION['pg'] = 'add_bank_edit';
        }

        if ($page == 'add_bank_delete') {   
            $_SESSION['pg'] = 'add_bank_delete';
        }

        if ($page == 'bank_deposit_edit') {   
            $_SESSION['pg'] = 'bank_deposit_edit';
        }

        if ($page == 'bank_deposit_delete') {   
            $_SESSION['pg'] = 'bank_deposit_delete';
        }

        if ($page == 'bank_withdrawals_edit') {   
            $_SESSION['pg'] = 'bank_withdrawals_edit';
        }
        if ($page == 'bank_withdrawals_delete') {   
            $_SESSION['pg'] = 'bank_withdrawals_delete';
        }

        if ($page == 'org_details') {   
            $_SESSION['pg'] = 'org_details';
        }

        if ($page == 'membber_picture_upload') {   
            $_SESSION['pg'] = 'membber_picture_upload';
        }


        
        if ($page == 'browse_member_photo') {   
            $_SESSION['pg'] = 'browse_member_photo';
        }

          
        if ($page == 'income_statement_account') {   
            $_SESSION['pg'] = 'income_statement_account';
        }

        if ($page == 'member_payments_statement') {   
            $_SESSION['pg'] = 'member_payments_statement';
        }

        if ($page == 'children_list') {   
            $_SESSION['pg'] = 'children_list';
        }

        if ($page == 'children_add_member') {   
            $_SESSION['pg'] = 'children_add_member';
        }

        if ($page == 'change_password_finance') {   
            $_SESSION['pg'] = 'change_password_finance';
        }

        if ($page == 'change_password_secretary') {   
            $_SESSION['pg'] = 'change_password_secretary';
        }

        
        if ($page == 'knight_officer_das') {   
            $_SESSION['pg'] = 'knight_officer_das';
        }

        if ($page == 'change_password_ko') {   
            $_SESSION['pg'] = 'change_password_ko';
        }

        if ($page == 'add_houses_ko') {   
            $_SESSION['pg'] = 'add_houses_ko';
        }

        if ($page == 'add_members_ko') {   
            $_SESSION['pg'] = 'add_members_ko';
        }

        if ($page == 'ranks_members_view_ko') {   
            $_SESSION['pg'] = 'ranks_members_view_ko';
        }

        if ($page == 'add_houses_ko') {   
            $_SESSION['pg'] = 'add_houses_ko';
        }

        if ($page == 'add_event_ko') {   
            $_SESSION['pg'] = 'add_event_ko';
        }

        if ($page == 'add_event_role_call_ko') {   
            $_SESSION['pg'] = 'add_event_role_call_ko';
        }

        if ($page == 'add_event_role_call_view_ko') {   
            $_SESSION['pg'] = 'add_event_role_call_view_ko';
        }

        if ($page == 'users_financial_das_ko') {   
            $_SESSION['pg'] = 'users_financial_das_ko';
        }

        if ($page == 'member_payments_statement_ko') {   
            $_SESSION['pg'] = 'member_payments_statement_ko';
        }
        if ($page == 'income_statement_account_ko') {   
            $_SESSION['pg'] = 'income_statement_account_ko';
        }

        if ($page == 'individual_bill_list') {   
            $_SESSION['pg'] = 'individual_bill_list';
        }

        if ($page == 'bill_add_member') {   
            $_SESSION['pg'] = 'bill_add_member';
        }



         
         //bill_add_member.php
        
        
        
        header('Location:' . '../v');
        
    } else {

       header('Location:' . '../index');
    }
} else {
 
    header('Location:' . '../index');
    
}