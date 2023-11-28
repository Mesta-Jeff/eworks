<?php

use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BankersController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('auth/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('auth/change-password', [AuthenticationController::class, 'change_password'])->name('change-password');
Route::get('auth/recover-password', [AuthenticationController::class, 'recover_password'])->name('recover-password');
Route::get('auth/reset-password', [AuthenticationController::class, 'reset_password'])->name('reset-password');
Route::get('auth/lockscreen', [AuthenticationController::class, 'lockscreen'])->name('lockscreen');
Route::get('auth/two-step', [AuthenticationController::class, 'two_step'])->name('two-step');




  // ALL THE GET FUNCTIONS

// =============================   SYSTEM SETTINGS  =============================================
Route::get('ss/roles', [SettingsController::class, 'viewRoles'])->name('ss.roles');
Route::get('ss/permissions', [SettingsController::class, 'viewPermissions'])->name('ss.permissions');
Route::get('ss/contract', [SettingsController::class, 'setContract'])->name('ss.contract');
Route::get('ss/payslip', [SettingsController::class, 'setPayslip'])->name('ss.payslip');
Route::get('ss/leave', [SettingsController::class, 'setLeave'])->name('ss.leave');
Route::get('ss/leave-claims', [SettingsController::class, 'leaveClaims'])->name('ss.leave-claims');
Route::get('ss/view-groups', [SettingsController::class, 'viewGroups'])->name('ss.view-groups');
Route::get('ss/configure-system', [SettingsController::class, 'configureSystem'])->name('ss.configure-system');
Route::get('ss/set-wage', [SettingsController::class, 'setWage'])->name('set-wage');
Route::get('ss/set-bank', [SettingsController::class, 'setBank'])->name('set-bank');



// ================================  CONTRACT   ===============================================================
Route::get('contract/sign-contract', [ContractController::class, 'signContract'])->name('contract.sign-contract');
Route::get('contract/terminate-contract', [ContractController::class, 'terminateContract'])->name('contract.terminate-contract');
Route::get('contract/pending-contract-request', [ContractController::class, 'pendingRequest'])->name('contract.pending-contract-request');
Route::get('contract/contract-review', [ContractController::class, 'contractReview'])->name('contract.contract-review');
Route::get('contract/batch-assignment', [ContractController::class, 'batchAssignment'])->name('contract.batch-assignment');
Route::get('contract/issue-statement', [ContractController::class, 'issueStatement'])->name('contract.issue-statement');
Route::get('contract/extend-contract-individual', [ContractController::class, 'extendIndividual'])->name('contract.extend-contract-individual');
Route::get('contract/extend-group-contract', [ContractController::class, 'extendGroup'])->name('contract.extend-group-contract');



// ==================================== PAYSLIP  ==========================================
Route::get('slip/approve-payslip', [SalaryController::class, 'approvePayslip'])->name('slip.approve-payslip');
Route::get('slip/financial-ticket', [SalaryController::class, 'financialTicket'])->name('slip.financial-ticket');
Route::get('slip/generate-pincode', [SalaryController::class, 'generatePincode'])->name('slip.generate-pincode');
Route::get('slip/prepare-payslip', [SalaryController::class, 'preparePayslip'])->name('slip.prepare-payslip');
Route::get('slip/release-salary', [SalaryController::class, 'releaseSalary'])->name('slip.release-salary');
Route::get('slip/release-pincode', [SalaryController::class, 'releasePincode'])->name('slip.release-pincode');
Route::get('slip/verify-payslip', [SalaryController::class, 'verifyPayslip'])->name('slip.verify-payslip');
Route::get('slip/view-slip-ticket', [SalaryController::class, 'viewSlipTicket'])->name('slip.view-slip-ticket');
Route::get('slip/withhold-payslip', [SalaryController::class, 'withholdPayslip'])->name('slip.withhold-payslip');



// ========================================   LOAN   ==========================================
Route::get('loan/process-loan', [LoanController::class, 'processLoan'])->name('loan.process-loan');
Route::get('loan/approve-loan', [LoanController::class, 'approveLoan'])->name('loan.approve-loan');
Route::get('loan/loan-statements', [LoanController::class, 'loanStatements'])->name('loan.loan-statements');



// =============================   ATENDANCE  =================================================
Route::get('attend/upload-attendance', [AttendanceController::class, 'uploadAttendance'])->name('attend.upload-attendance');
Route::get('attend/remark-attendance', [AttendanceController::class, 'remarkAttendance'])->name('attend.remark-attendance');
Route::get('attend/review-attendance', [AttendanceController::class, 'reviewAttendance'])->name('attend.review-attendance');
Route::get('attend/check-days-worker', [AttendanceController::class, 'checkDaysWorker'])->name('attend.check-days-worker');
Route::get('attend/check-group-days', [AttendanceController::class, 'checkGroupDays'])->name('attend.check-group-days');
Route::get('attend/days-claims', [AttendanceController::class, 'daysClaims'])->name('attend.days-claims');
Route::get('attend/generate-timetable', [AttendanceController::class, 'generateTimetable'])->name('attend.generate-timetable');


// ======================================    LEAVE    =========================================================
Route::get('leave/leave-requests', [LeaveController::class, 'leaveRequests'])->name('leave.leave-requests');
Route::get('leave/requests-days', [LeaveController::class, 'requestsDays'])->name('leave.requests-days');
Route::get('leave/pending-leaves', [LeaveController::class, 'pendingLeaves'])->name('leave.pending-leaves');
Route::get('leave/due-leaves', [LeaveController::class, 'dueLeaves'])->name('leave.due-leaves');
Route::get('leave/enforce-leave', [LeaveController::class, 'enforceLeave'])->name('leave.enforce-leave');
Route::get('leave/reschedule-leave', [LeaveController::class, 'rescheduleLeave'])->name('leave.reschedule-leave');


// ===============================  WORKERS   ===================================================
Route::get('user/view-casual-workers', [WorkersController::class, 'viewCasualWorkers'])->name('user.view-casual-workers');
Route::get('user/view-contract-workers', [WorkersController::class, 'viewContractWorkers'])->name('user.view-contract-workers');
Route::get('user/view-permanent-workers', [WorkersController::class, 'viewPermanentWorkers'])->name('user.view-permanent-workers');
Route::get('user/assign-permission', [WorkersController::class, 'assignPermission'])->name('user.assign-permission');
Route::get('user/effect-promotion', [WorkersController::class, 'effectPromotion'])->name('user.effect-promotion');
Route::get('user/complied-information', [WorkersController::class, 'compliedInformation'])->name('complied-information');



// ====================================  REQUESTS  =====================================================================
Route::get('requests/attendance-list', [RequestController::class, 'attendanceList'])->name('requests.attendance-list');
Route::get('requests/workers-records', [RequeStController::class, 'workersRecords'])->name('requests.workers-records');
Route::get('requests/loans', [RequestController::class, 'loans'])->name('requests.loans');
Route::get('requests/account-minute', [RequestController::class, 'accountMinute'])->name('requests.account-minute');
Route::get('requests/promotion-claims', [RequeStController::class, 'promotionClaims'])->name('requests.promotion-claims');
Route::get('requests/leave-claims', [RequestController::class, 'leaveClaims'])->name('requests.leave-claims');
Route::get('requests/excuse-duties', [RequestController::class, 'excuseDuties'])->name('requests.excuse-duties');
Route::get('requests/requested-days', [RequestController::class, 'requestedDays'])->name('requests.requested-days');



// ====================== VARIOUS DASHBOARD   ========================================
Route::get('hr/dashboard', [ManagementController::class, 'dashboard'])->name('hr.dashboard');
Route::get('acc/dashboard', [AccountantController::class, 'dashboard'])->name('acc.dashboard');
Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('bank/dashboard', [BankersController::class, 'dashboard'])->name('bank.dashboard');
Route::get('dev/dashboard', [DeveloperController::class, 'dashboard'])->name('dev.dashboard');


// https://chat.openai.com/share/1d565687-a501-4ea2-8a0a-1c4ced429c32



// =======================================   ALL THE POST FUNCTIONS    =================================================

Route::post('/add-role', [SettingsController::class, 'add_Role'])->name('add-role');
Route::post('/edit-role', [SettingsController::class, 'edit_Role'])->name('edit-role');
Route::post('/delete-role', [SettingsController::class, 'delete_Role'])->name('delete-role');
Route::get('/fetch-role', [SettingsController::class, 'fetch_role'])->name('fetch-role');


Route::post('/add-permission', [SettingsController::class, 'add_permission'])->name('add-permission');
Route::post('/distroy-permission', [SettingsController::class, 'distroy_permission'])->name('distroy-permission');
Route::get('/fetch-permission', [SettingsController::class, 'fetch_permission'])->name('fetch-permission');

Route::post('/add-group', [SettingsController::class, 'add_group'])->name('add-group');
Route::post('/update-group', [SettingsController::class, 'update_group'])->name('update-group');
Route::post('/distroy-group', [SettingsController::class, 'distroy_group'])->name('distroy-group');
Route::get('/fetch-group', [SettingsController::class, 'fetch_group'])->name('fetch-group');

Route::post('/add-country', [SettingsController::class, 'add_country'])->name('add-country');
Route::post('/update-country', [SettingsController::class, 'update_country'])->name('update-country');
Route::post('/distroy-country', [SettingsController::class, 'distroy_country'])->name('distroy-country');
Route::get('/fetch-country', [SettingsController::class, 'fetch_country'])->name('fetch-country');
Route::get('/view-country', [SettingsController::class, 'viewCountries'])->name('view-country');

Route::post('/add-region', [SettingsController::class, 'add_region'])->name('add-region');
Route::post('/update-region', [SettingsController::class, 'update_region'])->name('update-region');
Route::post('/distroy-region', [SettingsController::class, 'distroy_region'])->name('distroy-region');
Route::get('/fetch-region', [SettingsController::class, 'fetch_region'])->name('fetch-region');
Route::get('/view-region', [SettingsController::class, 'viewRegions'])->name('view-region');

Route::post('/add-district', [SettingsController::class, 'add_district'])->name('add-district');
Route::post('/update-district', [SettingsController::class, 'update_district'])->name('update-district');
Route::post('/distroy-district', [SettingsController::class, 'distroy_district'])->name('distroy-district');
Route::get('/fetch-district', [SettingsController::class, 'fetch_district'])->name('fetch-district');
Route::get('/view-district', [SettingsController::class, 'viewDistricts'])->name('view-district');

Route::post('/add-town', [SettingsController::class, 'add_town'])->name('add-town');
Route::post('/update-town', [SettingsController::class, 'update_town'])->name('update-town');
Route::post('/distroy-town', [SettingsController::class, 'distroy_town'])->name('distroy-town');
Route::get('/fetch-town', [SettingsController::class, 'fetch_town'])->name('fetch-town');
Route::get('/view-town', [SettingsController::class, 'viewTowns'])->name('view-town');

Route::post('/add-wage', [SettingsController::class, 'add_wage'])->name('add-wage');
Route::post('/update-wage', [SettingsController::class, 'update_wage'])->name('update-wage');
Route::post('/distroy-wage', [SettingsController::class, 'distroy_wage'])->name('distroy-wage');

Route::post('/add-bank', [SettingsController::class, 'add_bank'])->name('add-bank');
Route::post('/update-bank', [SettingsController::class, 'update_bank'])->name('update-bank');
Route::post('/distroy-bank', [SettingsController::class, 'distroy_bank'])->name('distroy-bank');
Route::get('/fetch-bank', [SettingsController::class, 'fetch_bank'])->name('fetch-bank');


Route::get('/pending-casual', [WorkersController::class, 'pending_casual'])->name('pending-casual');
Route::post('/add-casual', [WorkersController::class, 'add_casual'])->name('add-casual');
Route::post('/add-casual-bulk', [WorkersController::class, 'add_casual_bulk'])->name('add-casual-bulk');
Route::post('/update-casual', [WorkersController::class, 'update_casual'])->name('update-casual');
Route::post('/distroy-casual', [WorkersController::class, 'distroy_casual'])->name('distroy-casual');



Route::post('/issue-new-contract', [ContractController::class, 'issue_contract'])->name('issue-new-contract');