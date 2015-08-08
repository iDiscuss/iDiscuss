<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2014 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|
+---------------------------------------------------------------------------
*/


if (!defined('IN_ANWSION'))
{
	die;
}

class work_class extends AWS_MODEL
{
	public function add_work_experience($uid, $start_year, $end_year, $company_name, $college_id)
	{
		return $this->insert('work_experience', array(
			'uid' => intval($uid),
			'start_year' => intval($start_year),
			'end_year' => intval($end_year),
			'company_name' => htmlspecialchars($company_name),
			'college_id' => intval($college_id),
			'add_time' => time()
		));
	}

	public function get_colleges_list()
	{
		if ($colleges = $this->fetch_all('colleges', null, 'id ASC'))
		{
			foreach ($colleges as $key => $val)
			{
				$college_list[$val['id']] = $val['college_name'];
			}
		}

		return $college_list;
	}

	public function get_work_experience_list($uid)
	{
		return $this->fetch_all('work_experience', 'uid = ' . intval($uid), 'start_year DESC');
	}

	public function del_work_experience($work_id, $uid)
	{
		return $this->delete('work_experience', 'uid = ' . intval($uid) . ' AND work_id = ' . intval($work_id));
	}

	public function update_work_experience($update_data, $work_id, $uid)
	{
		if (! $uid OR ! $work_id)
		{
			return false;
		}

		return $this->update('work_experience', $update_data, 'uid = ' . intval($uid) . ' AND work_id = ' . intval($work_id));
	}

	public function remove_college($college_id)
	{
		return $this->delete('colleges', 'id = ' . intval($college_id));
	}

	public function add_college($college_name)
	{
		return $this->insert('colleges', array(
			'college_name' => htmlspecialchars($college_name)
		));
	}

	public function update_college($id, $data)
	{
		return $this->update('colleges', $data, 'id = ' . intval($id));
	}
}