@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h4 class="title">
                Application Activity Log
            </h4>

            <p class="text-danger">Application Activity Log cleanup can be managed in Cron Job Settings.</p>
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Name</th>

                </tr>
                </thead>
                <tbody>
                <tr><td>[Payment Invoice 137]  Transaction-114 - 9.3000 </td><td>2019-02-16 21:43:29</td><td>admin</td></tr><tr><td>[Payment Invoice 136]  Transaction-113 - 657.3900 </td><td>2019-02-16 21:41:19</td><td>admin</td></tr><tr><td>[Payment Invoice 135]  Transaction-112 - 891.0900 </td><td>2019-02-16 21:40:40</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 21:34:14</td><td></td></tr><tr><td>[New Product] -lkkkkkkk  -Qty-10 ID 72</td><td>2019-02-16 21:33:55</td><td>admin</td></tr><tr><td>[New Product] -lkkkkkkk  -Qty-10 ID 72</td><td>2019-02-16 21:33:55</td><td>admin</td></tr><tr><td>[New Product] -lkkkkkkk  -Qty-10 ID 72</td><td>2019-02-16 21:33:55</td><td>admin</td></tr><tr><td>[Payment Invoice 133]  Transaction-111 - 478.9500 </td><td>2019-02-16 21:22:11</td><td>admin</td></tr><tr><td>[Payment Invoice 132]  Transaction-110 - 77940.0000 </td><td>2019-02-16 21:18:31</td><td>admin</td></tr><tr><td>[Payment Invoice 131]  Transaction-109 - 9.3000 </td><td>2019-02-16 21:18:24</td><td>admin</td></tr><tr><td>[Payment Invoice 130]  Transaction-108 - 180892.5000 </td><td>2019-02-16 21:18:17</td><td>admin</td></tr><tr><td>[New Product] -10 ????  -Qty-800 ID 71</td><td>2019-02-16 21:14:36</td><td>admin</td></tr><tr><td>[New Product] -5 ????  -Qty-800 ID 70</td><td>2019-02-16 21:13:58</td><td>admin</td></tr><tr><td>[Payment Invoice 129]  Transaction-107 - 465.0000 </td><td>2019-02-16 21:12:39</td><td>admin</td></tr><tr><td>[Payment Invoice 128]  Transaction-106 - 18694.0000 </td><td>2019-02-16 21:12:25</td><td>admin</td></tr><tr><td>[Payment Invoice 127]  Transaction-105 - 18694.0000 </td><td>2019-02-16 21:12:13</td><td>admin</td></tr><tr><td>[Payment Invoice 126]  Transaction-104 - 325.2400 </td><td>2019-02-16 21:03:32</td><td>admin</td></tr><tr><td>[Payment Invoice 125]  Transaction-103 - 1449.5500 </td><td>2019-02-16 21:03:08</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 20:51:39</td><td>admin</td></tr><tr><td>[Payment Invoice 124]  Transaction-102 - 1259.8600 </td><td>2019-02-16 20:46:58</td><td>admin</td></tr><tr><td>[Payment Invoice 123]  Transaction-101 - 2456.9800 </td><td>2019-02-16 20:35:12</td><td>admin</td></tr><tr><td>[Payment Invoice 122]  Transaction-100 - 657.5700 </td><td>2019-02-16 20:13:21</td><td>salesmanager</td></tr><tr><td>[Payment Invoice 120]  Transaction-99 - 795.27 </td><td>2019-02-16 20:10:43</td><td>admin</td></tr><tr><td>[Payment Invoice 119]  Transaction-98 - 1214.00 </td><td>2019-02-16 19:52:31</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 19:45:31</td><td></td></tr><tr><td>[Logged Out] manager</td><td>2019-02-16 19:44:42</td><td></td></tr><tr><td>[Logged In] manager@example.com</td><td>2019-02-16 19:44:35</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 19:44:21</td><td></td></tr><tr><td>[Product Transfer] -Sauce - Ranch Dressing  -Qty-2  W France ID 9</td><td>2019-02-16 19:42:35</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 19:41:02</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 19:36:10</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 19:33:30</td><td></td></tr><tr><td>[Payment Invoice 118]  Transaction-97 - 1124.15 </td><td>2019-02-16 19:20:21</td><td>salesperson</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 19:09:28</td><td></td></tr><tr><td>[Product Transfer] -BLUE BAND  -Qty-12  W Japan ID 61</td><td>2019-02-16 19:06:43</td><td>admin</td></tr><tr><td>[Payment Invoice 115]  Transaction-95 - 469.58 </td><td>2019-02-16 18:49:04</td><td>admin</td></tr><tr><td>[Payment Invoice 114]  Transaction-94 - 3.00 </td><td>2019-02-16 18:48:54</td><td>admin</td></tr><tr><td>[Payment Invoice 113]  Transaction-93 - 1225.86 </td><td>2019-02-16 18:46:37</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 18:44:50</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 18:37:24</td><td></td></tr><tr><td>[Logged In] salesmanager@example.com</td><td>2019-02-16 18:34:38</td><td></td></tr><tr><td>[Logged Out] manager</td><td>2019-02-16 18:34:25</td><td></td></tr><tr><td>[Logged In] manager@example.com</td><td>2019-02-16 18:26:52</td><td></td></tr><tr><td>[Logged Out] projectmanager</td><td>2019-02-16 18:10:41</td><td></td></tr><tr><td>[Payment Invoice 112]  Transaction-92 - 19565.00 </td><td>2019-02-16 17:45:22</td><td>salesmanager</td></tr><tr><td>[Logged Out] inventory</td><td>2019-02-16 17:31:56</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 17:27:38</td><td></td></tr><tr><td>[Payment Invoice 111]  Transaction-91 - 419.35 </td><td>2019-02-16 17:27:14</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 17:02:28</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 17:01:51</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 16:51:47</td><td></td></tr><tr><td>[Client Added] sILAMBU ID 57</td><td>2019-02-16 16:48:26</td><td>admin</td></tr><tr><td>[Payment Invoice 110]  Transaction-89 - 640.85 </td><td>2019-02-16 16:46:48</td><td>admin</td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 16:31:04</td><td>admin</td></tr><tr><td>[Client Added]  ID 56</td><td>2019-02-16 16:27:15</td><td>admin</td></tr><tr><td>[Payment Invoice 107]  Transaction-86 - 1352.29 </td><td>2019-02-16 15:39:11</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 15:24:08</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 15:21:53</td><td></td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 15:19:46</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 15:14:09</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:58:30</td><td></td></tr><tr><td>[Payment Invoice 106]  Transaction-85 - 0 </td><td>2019-02-16 14:55:29</td><td>admin</td></tr><tr><td>[Payment Invoice 106]  Transaction-84 - 5604.47 </td><td>2019-02-16 14:53:14</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 14:52:04</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:51:12</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 14:38:45</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:38:27</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 14:35:19</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:34:52</td><td></td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 14:33:49</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 14:32:01</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:31:39</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 14:29:17</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 14:14:05</td><td></td></tr><tr><td>[Payment Invoice 105]  Transaction-83 - 3110.82 </td><td>2019-02-16 13:41:29</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 13:20:11</td><td></td></tr><tr><td>[Payment Invoice 104]  Transaction-82 - 466.58 </td><td>2019-02-16 13:10:06</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 13:05:03</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 12:56:54</td><td></td></tr><tr><td>[Payment Invoice 103]  Transaction-81 - 50.00 </td><td>2019-02-16 12:53:48</td><td>admin</td></tr><tr><td>[Client Added] SIDNEY ID 55</td><td>2019-02-16 12:53:10</td><td>admin</td></tr><tr><td>[New Product] -PIZZA GRANDE  -Qty-20 ID 66</td><td>2019-02-16 12:49:18</td><td>admin</td></tr><tr><td>[New Product] -PIZZA GRANDE  -Qty-20 ID 66</td><td>2019-02-16 12:49:18</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 12:48:27</td><td></td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 12:44:11</td><td></td></tr><tr><td>[Payment Invoice 99]  Transaction-80 - 2871.73 </td><td>2019-02-16 12:10:23</td><td>admin</td></tr><tr><td>[New Product] -TL-WR850N TP-LINK ROUTER 300MBPS N ROUTER  -Qty-0 ID 65</td><td>2019-02-16 12:04:56</td><td>admin</td></tr><tr><td>[Payment Invoice 97]  Transaction-79 - 7337.51 </td><td>2019-02-16 12:03:59</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 11:58:45</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 11:55:43</td><td></td></tr><tr><td>[Payment Invoice 96]  Transaction-78 - 466.58 </td><td>2019-02-16 11:45:03</td><td>admin</td></tr><tr><td>[Payment Invoice 94]  Transaction-77 - 250.00 </td><td>2019-02-16 11:22:55</td><td>admin</td></tr><tr><td>[Payment Invoice 93]  Transaction-76 - 50200.00 </td><td>2019-02-16 11:22:26</td><td>admin</td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 11:14:49</td><td>admin</td></tr><tr><td>[Payment Invoice 92]  Transaction-75 - 2279.01 </td><td>2019-02-16 11:12:06</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 11:07:26</td><td></td></tr><tr><td>[Logged Out] </td><td>2019-02-16 11:06:32</td><td></td></tr><tr><td>[Logged Out] inventory</td><td>2019-02-16 11:06:32</td><td></td></tr><tr><td>[Employee ClockOut]  ID 20</td><td>2019-02-16 11:06:21</td><td>inventory</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 11:05:53</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 20</td><td>2019-02-16 11:04:20</td><td>inventory</td></tr><tr><td>[Client Added] ABC ID 54</td><td>2019-02-16 11:03:12</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 10:50:01</td><td></td></tr><tr><td>[Payment Invoice 91]  Transaction-74 - 466.58 </td><td>2019-02-16 10:46:03</td><td>salesperson</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 10:45:45</td><td></td></tr><tr><td>[Payment Invoice 90]  Transaction-73 - 466.58 </td><td>2019-02-16 10:43:38</td><td>salesperson</td></tr><tr><td>[Payment Invoice 89]  Transaction-72 - 885.93 </td><td>2019-02-16 10:42:46</td><td>salesperson</td></tr><tr><td>[Payment Invoice 88]  Transaction-71 - 885.93 </td><td>2019-02-16 10:40:49</td><td>salesperson</td></tr><tr><td>[Payment Invoice 87]  Transaction-70 - 1190.85 </td><td>2019-02-16 10:40:26</td><td>admin</td></tr><tr><td>[Payment Invoice 86]  Transaction-69 - 466.58 </td><td>2019-02-16 10:37:52</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 10:34:45</td><td></td></tr><tr><td>[Payment Invoice 84]  Transaction-68 - 466.58 </td><td>2019-02-16 10:24:13</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 10:23:11</td><td></td></tr><tr><td>[New Product] -????  -Qty-800 ID 64</td><td>2019-02-16 10:23:01</td><td>admin</td></tr><tr><td>[Category Created] ???? ID 13</td><td>2019-02-16 10:22:32</td><td>admin</td></tr><tr><td>[Logged Out] </td><td>2019-02-16 10:15:13</td><td></td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 10:14:25</td><td></td></tr><tr><td>[Update Product] -BLUE BAND  -Qty-102 ID 61</td><td>2019-02-16 10:13:57</td><td>admin</td></tr><tr><td>[Update Product] -BLUE BAND  -Qty-2 ID 61</td><td>2019-02-16 10:13:00</td><td>admin</td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 10:10:01</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 10:08:19</td><td></td></tr><tr><td>[Update Product] -Pasta - Orecchiette  -Qty-2.00 ID 63</td><td>2019-02-16 09:51:09</td><td>admin</td></tr><tr><td>[Update Product] -Pasta - Orecchiette  -Qty-2.00 ID 63</td><td>2019-02-16 09:50:46</td><td>admin</td></tr><tr><td>[Product Transfer] -Pasta - Orecchiette  -Qty-2  W France ID 33</td><td>2019-02-16 09:49:42</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 09:48:28</td><td>admin</td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 09:48:22</td><td>admin</td></tr><tr><td>[Payment Invoice 82]  Transaction-64 - 11063.56 </td><td>2019-02-16 09:39:57</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 09:33:03</td><td>admin</td></tr><tr><td>[Employee ClockOut]  ID 9</td><td>2019-02-16 09:32:56</td><td>admin</td></tr><tr><td>[Logged In] superadmin@example.com</td><td>2019-02-16 09:28:51</td><td></td></tr><tr><td>[Employee ClockIn]  ID 18</td><td>2019-02-16 09:10:15</td><td>salesperson</td></tr><tr><td>[Logged Out] salesmanager</td><td>2019-02-16 09:09:48</td><td></td></tr><tr><td>[Employee ClockOut]  ID 17</td><td>2019-02-16 09:09:35</td><td>salesmanager</td></tr><tr><td>[Employee ClockIn]  ID 17</td><td>2019-02-16 09:09:30</td><td>salesmanager</td></tr><tr><td>[Employee ClockOut]  ID 17</td><td>2019-02-16 09:09:25</td><td>salesmanager</td></tr><tr><td>[Payment Invoice 79]  Transaction-62 - 373.93 </td><td>2019-02-16 09:09:21</td><td>admin</td></tr><tr><td>[Client Added] Varcine Tech ID 53</td><td>2019-02-16 09:07:06</td><td>admin</td></tr><tr><td>[Client Added] muthu ID 52</td><td>2019-02-16 09:05:56</td><td>admin</td></tr><tr><td>[Logged Out] admin</td><td>2019-02-16 09:04:47</td><td></td></tr><tr><td>[Payment Invoice 77]  Transaction-61 - 100.00 </td><td>2019-02-16 09:04:05</td><td>admin</td></tr><tr><td>[Client Updated] BONNIE ID 51</td><td>2019-02-16 09:02:27</td><td>admin</td></tr><tr><td>[Update Product] -BLUE BAND  -Qty-7.00 ID 61</td><td>2019-02-16 09:00:29</td><td>admin</td></tr><tr><td>[Client Updated] BONNIE ID 51</td><td>2019-02-16 08:58:04</td><td>admin</td></tr><tr><td>[Client Updated] BONNIE ID 51</td><td>2019-02-16 08:56:52</td><td>admin</td></tr><tr><td>[Employee ClockIn]  ID 9</td><td>2019-02-16 08:54:31</td><td>admin</td></tr><tr><td>[Payment Invoice 75]  Transaction-60 - 0 </td><td>2019-02-16 08:54:18</td><td>admin</td></tr><tr><td>[Payment Invoice 75]  Transaction-59 - 763.86 </td><td>2019-02-16 08:52:59</td><td>admin</td></tr><tr><td>[Payment Invoice 74]  Transaction-58 - 1259.86 </td><td>2019-02-16 08:52:42</td><td>admin</td></tr><tr><td>[Payment Invoice 73]  Transaction-57 - 150.00 </td><td>2019-02-16 08:52:34</td><td>admin</td></tr><tr><td>[Payment Invoice 72]  Transaction-56 - 300.00 </td><td>2019-02-16 08:52:12</td><td>admin</td></tr>                </tbody>

            </table>
        </div>
    </div>


<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Delete ?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="settings/taxslabs_delete">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection