<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    private $m_failedJob;
    public function __construct()
    {
        $this->m_failedJob = DB::table('failed_jobs');
    }

    public function index()
    {
        $failed_jobs = $this->m_failedJob->get();
        return View('post-login.pages.jobs.failed', compact('failed_jobs'));
    }
}
