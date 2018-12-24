package com.sl.pmp.service.impl;

import java.io.UnsupportedEncodingException;
import java.text.DecimalFormat;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.List;
import java.util.Map;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.google.gson.Gson;
import com.google.gson.JsonSyntaxException;
import com.sl.pmp.dao.PowerMonitorDao;
import com.sl.pmp.service.PowerDataService;
import com.sl.pmp.utils.JedisPool;

import redis.clients.jedis.Jedis;

@Service("powerDataImpl")
public class PowerDataServiceImpl implements PowerDataService {

	@Autowired
	private JedisPool jedisPool;
	@Autowired
	private PowerMonitorDao powerMonitorDao;

	@Override
	public HashMap<Object, Object> getAllPowerData() throws UnsupportedEncodingException {
		Jedis _jedis = jedisPool.getInstance();
		Set<byte[]> keySet = _jedis.keys("TG10:*".getBytes());
		byte[][] keys = keySet.toArray(new byte[keySet.size()][]);
		// 获取所有value
		byte[][] values = _jedis.mget(keys).toArray(new byte[keySet.size()][]);
		// key-value对
		Gson gson = new Gson();
		HashMap<Object, Object> dataMap=new HashMap<>();
		DecimalFormat df = new DecimalFormat("0.00");
       
		for (int i = 0; i < keySet.size(); ++i) {
			HashMap<String, Object> fileMap=new HashMap<>();
			fileMap.put("val",df.format(Double.parseDouble( gson.fromJson(new String(values[i], "utf-8"), dataMap.getClass()).get("val").toString())));
			fileMap.put("desc", "");
			dataMap.put(new String(keys[i], "utf-8").split(":")[1], fileMap);
		}
		return dataMap;
	}
	@Override
	public HashMap<Object, Object> getAllPowerData4java() throws UnsupportedEncodingException {
		Jedis _jedis = jedisPool.getInstance();
		Set<byte[]> keySet = _jedis.keys("TG10:*".getBytes());
//		ArrayList<String> tagsList=powerMonitorDao.getTags("TG10");
		
		byte[][] keys = keySet.toArray(new byte[keySet.size()][]);
		// 获取所有value
		byte[][] values = _jedis.mget(keys).toArray(new byte[keySet.size()][]);
		// key-value对
		Gson gson = new Gson();
		HashMap<Object, Object> dataMap=new HashMap<>();
		DecimalFormat df = new DecimalFormat("0.00");
	
		for (int i = 0; i < keySet.size(); ++i) {
			HashMap<String, Object> fileMap=new HashMap<>();
			fileMap.put("val",df.format(Double.parseDouble( gson.fromJson(new String(values[i], "utf-8"), dataMap.getClass()).get("val").toString())));
			fileMap.put("desc","");
			dataMap.put(new String(keys[i], "utf-8").split(":")[1].replace("-", "_"), fileMap);
		}
		return dataMap;
	}

	@Override
	public HashMap<Object, Object> getTags(String tg) throws Exception {
		
		Jedis _jedis = jedisPool.getInstance();
		ArrayList<String> tagsList=powerMonitorDao.getTags(tg);
		// 获取所有value
		Gson gson = new Gson();
		HashMap<Object, Object> dataMap=new HashMap<>();
		for(int i=0;i<tagsList.size();i++){
			
			Set<byte[]> keySet = _jedis.keys((tg+":"+tagsList.get(i).toString()+"*").getBytes());
			if (keySet.size()==0)continue;
			byte[][] keys = keySet.toArray(new byte[keySet.size()][]);
			// 获取所有value
			byte[][] values = _jedis.mget(keys).toArray(new byte[keySet.size()][]);
			
			for (int j = 0; j < keySet.size(); ++j) {
				HashMap<String, Object> fileMap=new HashMap<>();
				fileMap.put("val", gson.fromJson(new String(values[j], "utf-8"), dataMap.getClass()).get("val"));
				fileMap.put("desc", gson.fromJson(new String(values[j], "utf-8"), dataMap.getClass()).get("val"));
				dataMap.put(new String(keys[j], "utf-8").split(":")[1].replace("-", "_"), fileMap);
			}
		}
		return dataMap;
	}
	
	@Override
	public ArrayList<String> getAlias(String Stg) {
		return powerMonitorDao.getAlias(Stg);
	}
	
	

}
