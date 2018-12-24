package com.sl.pmp.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import com.sl.pmp.entity.Test01;
import com.sl.pmp.service.Test01Service;
import com.sl.pmp.utils.RedisUtils;

import redis.clients.jedis.Jedis;

import com.sl.pmp.utils.JedisPool;


@Controller
@RequestMapping("/pmp")
public class Test01Controller {
	@Autowired
	private Test01Service test01service;
	@Autowired
	private RedisUtils rUtils;
	

    @Autowired
    JedisPool JedisPool;
	@RequestMapping("/testDbQueryNum")
	@ResponseBody
	public int queryToltal(){
		int i=test01service.queryTotal();
		return i;
	}
	@RequestMapping("/testDbQueryList")
	@ResponseBody
	public ArrayList<Test01> queryList(){
		ArrayList<Test01> list=test01service.queryList();
		return list;
	}
	@RequestMapping("/html")
	public String testPag(){
		
		return "testPag/hPag";
	}
	
	@RequestMapping("/monitor_whgc")
	public String monitor_whgc(){
		
		return "pmpPag/monitor_whgc";
	}
	@RequestMapping("/testRedis")
	@ResponseBody
	public boolean testRedis(){
		boolean _val=rUtils.set("ceshi", "123456");
		return _val;
	}
	@RequestMapping("/testRedisGet")
	@ResponseBody
	public String testRedisGet(){
		Jedis _jedis= JedisPool.getInstance();
		String ss=_jedis.get("TG10:d1_b7_uca");
		return ss;
	}
}
