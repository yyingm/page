package com.sl.pmp.service.impl;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.sl.pmp.dao.Test01Dao;
import com.sl.pmp.entity.Test01;
import com.sl.pmp.service.Test01Service;
@Service("test01Service")
public class Test01ServiceImpl implements Test01Service{
	@Autowired
    private Test01Dao test01Dao;
	@Override
	public int queryTotal() {
		int i=test01Dao.queryTotal();
		return i;
	}
	@Override
	public ArrayList<Test01> queryList() {
		// TODO Auto-generated method stub
		return test01Dao.queryList();
	}
	
}
