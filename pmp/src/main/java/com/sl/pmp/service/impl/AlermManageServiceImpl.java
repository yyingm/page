package com.sl.pmp.service.impl;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.sl.pmp.dao.AlermManageDao;
import com.sl.pmp.service.AlermManagerService;
@Service("alermManagerService")
public class AlermManageServiceImpl implements AlermManagerService {
	@Autowired
	private AlermManageDao alermManageDao;
	@Override
	public ArrayList<Object> getAlermData(String pid) {
		ArrayList<Object> alermData = alermManageDao.getAlermData(pid);
		return alermData;
	}

}
